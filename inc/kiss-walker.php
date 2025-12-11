<?php 

class Kiss_Walker_Nav_Menu extends Walker_Nav_Menu {

    // Начало уровня меню
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);

        if ($depth === 0) {
            $classes = array('menu__sub-list', '_spoller-init', 'menu__sub-list_small');
            $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
            $output .= "\n" . $indent . '<ul' . $class_names . ' data-spollers="" data-one-spoller="" hidden="">' . "\n";
        } elseif( $depth === 1 ) {
            $classes = array('menu__sub2-list');
            $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
            $output .= "\n" . $indent . '<ul' . $class_names . ' hidden="">' . "\n";
        } else {
            $classes = array('sub-menu');
            $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
            $output .= "\n" . $indent . '<ul' . $class_names . '>' . "\n";
        }
    }

    // Конец уровня меню
    function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    // Начало элемента меню
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        
        // Добавляем класс menu__item _spoller-init для первого уровня
        if ($depth === 0) {
            $class_names .= ' menu__item _spoller-init';
        }

        // Проверяем наличие подменю по классу menu-item-has-children
        $has_children = in_array('menu-item-has-children', $classes);

        // Добавляем класс menu__sub-item для <li> в подменю
        if ($depth > 0) {
            $class_names .= ' menu__sub-item';
        }

        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $id = apply_filters('nav_menu_id', 'menu-item-'. $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names;

        // Добавляем атрибут data-spollers для первого уровня
        if ($depth === 0) {
            $output .= ' data-spollers';
        }

        $output .= '>';

        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target ) ? $item->target : '';
        $atts['rel']    = ! empty( $item->xfn )     ? $item->xfn    : '';
        $atts['href']   = ! empty( $item->url )     ? $item->url    : '';

        // Добавляем класс menu__sub-link для ссылок в подменю
        $atts['class']  = ($depth > 0) ? 'menu__sub-link' : 'menu__link';

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;

        // Оборачиваем текст в <h3> для подменю
        if ($depth > 0 && $depth < 2) {
            $item_output .= '<a'. $attributes .'>';
            $item_output .= '<h3>' . $title . '</h3>';
            $item_output .= '</a>';
        } else {
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
        }

        $item_output .= $args->after;

        // Добавляем кнопку, если у элемента есть подменю
        if ($depth === 0 && $has_children) {
            $item_output .= '<span data-spoller="" data-spoller-close class="menu__arrow-icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.44015 6.94011C4.7214 6.65921 5.10264 6.50143 5.50014 6.50143C5.89765 6.50143 6.27889 6.65921 6.56014 6.94011L12.0001 12.3801L17.4401 6.94011C17.7245 6.67515 18.1006 6.53091 18.4892 6.53776C18.8778 6.54462 19.2486 6.70204 19.5234 6.97687C19.7982 7.2517 19.9556 7.62247 19.9625 8.01107C19.9694 8.39967 19.8251 8.77576 19.5601 9.06011L13.0601 15.5601C12.7789 15.841 12.3976 15.9988 12.0001 15.9988C11.6026 15.9988 11.2214 15.841 10.9401 15.5601L4.44015 9.06011C4.15924 8.77886 4.00146 8.39762 4.00146 8.00011C4.00146 7.60261 4.15924 7.22136 4.44015 6.94011Z"></path>
                                </svg>
                            </span>';
        } else if ($depth === 1 && $has_children) {
            $item_output .= '<button data-spoller="" class="menu__arrow-icon">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.44015 6.94011C4.7214 6.65921 5.10264 6.50143 5.50014 6.50143C5.89765 6.50143 6.27889 6.65921 6.56014 6.94011L12.0001 12.3801L17.4401 6.94011C17.7245 6.67515 18.1006 6.53091 18.4892 6.53776C18.8778 6.54462 19.2486 6.70204 19.5234 6.97687C19.7982 7.2517 19.9556 7.62247 19.9625 8.01107C19.9694 8.39967 19.8251 8.77576 19.5601 9.06011L13.0601 15.5601C12.7789 15.841 12.3976 15.9988 12.0001 15.9988C11.6026 15.9988 11.2214 15.841 10.9401 15.5601L4.44015 9.06011C4.15924 8.77886 4.00146 8.39762 4.00146 8.00011C4.00146 7.60261 4.15924 7.22136 4.44015 6.94011Z"></path>
                                </svg>
                            </button>';
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    // Конец элемента меню
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }

}
