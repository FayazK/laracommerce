<?php

function sidebarMenu($link, $label, $icon = null, $bagde = null, $childs = []) {
    $active = '';
    $submenu = '';
    $navmenu = '';
    $hasChilds = false;
    $icon = (is_null($icon)) ? '' : '<i class="fa fa-' . $icon . '"></i>';
    $route = \Illuminate\Http\Request::capture()->fullUrl();
    if ($route == $link) {
        $active = 'active';
    }
    if (count($childs) > 0) {
        $hasChilds = true;
        $submenu .= '<ul class="treeview-menu">';
        foreach ($childs as $smenu) {
            $submenu .= '<li';
            if ($smenu['active']) {
                $submenu .= ' class="active"';
                $active = 'active';
            }
            $submenu .= '>';
            $submenu .= '<a href="' . $smenu['url'] . '">' . $smenu['icon'] . $smenu['label'].'</a>';
        }
        $submenu .= '</ul>';
    }
    $navmenu .= '<li class="' . $active;
    if ($hasChilds) {
        $navmenu .= ' treeview';
    }
    $navmenu .= '">';
    $navmenu .= '<a href="' . $link . '">' . $icon . '<span>' . $label . '</span>';
    if ($hasChilds) {
        $navmenu .= '<i class="fa fa-angle-left pull-right"></i>';
    }
    $navmenu .= '</a>' . $submenu . '</li>';
    return $navmenu;
}

function sidebarMenuChild($label, $url, $icon = null) {
    $route = \Illuminate\Http\Request::capture()->fullUrl();
    $active = false;
    if ($url == $route) {
        $active = true;
    }
    if (!is_null($icon)) {
        $icon = '<i class="fa fa-' . $icon . '"><i>';
    }
    $menu = [
        'url' => $url,
        'label' => $label,
        'active' => $active,
        'icon' => $icon
    ];
    return $menu;
}
