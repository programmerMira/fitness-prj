<?php
/*
    $data = $menuel['elements']
*/

if (!function_exists('renderDropdown')) {
    function renderDropdown($data)
    {
        if (array_key_exists('slug', $data) && $data['slug'] === 'dropdown') {
            echo '<li class="c-sidebar-nav-dropdown">';
            echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
            if ($data['hasIcon'] === true && $data['iconType'] === 'coreui') {
                echo '<i class="' . $data['icon'] . ' c-sidebar-nav-icon"></i>';
            }
            echo $data['name'] . '</a>';
            echo '<ul class="c-sidebar-nav-dropdown-items">';
            renderDropdown($data['elements']);
            echo '</ul></li>';
        } else {
            for ($i = 0; $i < count($data); $i++) {
                if ($data[$i]['slug'] === 'link') {
                    echo '<li class="c-sidebar-nav-item">';
                    echo '<a class="c-sidebar-nav-link" href="' . url($data[$i]['href']) . '">';
                    echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
                } elseif ($data[$i]['slug'] === 'dropdown') {
                    renderDropdown($data[$i]);
                }
            }
        }
    }
}
?>


<div class="c-sidebar-brand">
    <svg width="25" height="24" viewBox="0 0 20 19" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M19.1595 6.42587L17.6303 4.92677L18.7799 3.80026C18.8815 3.70073 18.9386 3.56586 18.9386 3.4248C18.9386 3.28373 18.8815 3.14886 18.7799 3.0493L17.2408 1.54049C17.0376 1.34132 16.6778 1.34132 16.4747 1.54049L15.3255 2.66742L13.7961 1.16804C13.373 0.753233 12.6869 0.753233 12.2637 1.16804C11.8405 1.58284 11.8405 2.25541 12.2637 2.67025L17.6271 7.92808C18.0503 8.34289 18.7364 8.34289 19.1595 7.92808C19.5826 7.51328 19.5826 6.84071 19.1595 6.42587Z"
            fill="white"/>
        <path
            d="M8.20804 17.1725L2.84466 11.9146C2.42145 11.4998 1.73544 11.4998 1.31223 11.9146C0.889089 12.3295 0.889089 13.0021 1.31223 13.4169L2.8417 14.9162L1.69437 16.0405C1.59276 16.1401 1.53562 16.2749 1.53562 16.416C1.53562 16.5571 1.59276 16.6919 1.69437 16.7915L3.23348 18.2998C3.33927 18.4036 3.4779 18.4555 3.61653 18.4555C3.75515 18.4555 3.89378 18.4036 3.99957 18.2998L5.14643 17.1756L6.67565 18.6747C7.09878 19.0895 7.78487 19.0895 8.20804 18.6747C8.63125 18.2598 8.63125 17.5873 8.20804 17.1725Z"
            fill="white"/>
        <path
            d="M10.7311 7.17676L7.44189 10.4122L9.74052 12.6656L13.0298 9.43005L10.7311 7.17676Z"
            fill="white"/>
        <path
            d="M17.627 9.43053L10.7312 2.67048C10.308 2.25567 9.62189 2.25567 9.19875 2.67048C8.77555 3.08535 8.77555 3.75786 9.19875 4.17273L16.0946 10.9328C16.5177 11.3476 17.2038 11.3476 17.627 10.9328C18.0502 10.518 18.0502 9.8454 17.627 9.43053Z"
            fill="white"/>
        <path
            d="M11.273 15.6698L4.37711 8.90974C3.95397 8.49493 3.26789 8.49493 2.84475 8.90974C2.42154 9.32461 2.42154 9.99718 2.84475 10.412L9.74061 17.172C10.1637 17.5868 10.8498 17.5868 11.273 17.172C11.6962 16.7572 11.6962 16.0847 11.273 15.6698Z"
            fill="white"/>
    </svg>
</div>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="/admin/users">
            <i class="c-sidebar-nav-icon"></i>
            Пользователи
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="/admin/notification">
            <i class="c-sidebar-nav-icon"></i>
            Уведомления
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="/admin/program">
            <i class="c-sidebar-nav-icon"></i>
            Программы/Марафоны
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="/admin/main">
            <i class="c-sidebar-nav-icon"></i>
            Главная
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="/admin/menu">
            <i class="c-sidebar-nav-icon"></i>
            Меню
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="/admin/workout">
            <i class="c-sidebar-nav-icon"></i>
            Тренировки
        </a>
    </li>
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="/admin/question">
            <i class="c-sidebar-nav-icon"></i>
            Вопросы
        </a>
    </li>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>
