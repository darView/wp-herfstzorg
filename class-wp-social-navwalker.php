<?php

if ( ! class_exists( 'WP_Social_Navwalker' ) ) {
    class WP_Social_Navwalker extends Walker_Nav_Menu {

        public function start_lvl( &$output, $depth = 0, $args = array() ) {
            $output .= '<ul>';
        }

        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            $class = 'fa';

            switch ($item->title) {
                case 'Facebook':
                    $class .= ' fa-facebook-square';
                    break;
                case 'Twitter':
                    $class .= ' fa-twitter-square';
                    break;
                case 'LinkedIn':
                    $class .= ' fa-linkedin-square';
                    break;
                case 'Instagram':
                    $class .= ' fa-instagram';
                    break;
                default:
                    $class .= ' fa-question';
                    break;

            }
            $output .= sprintf( "\n
                <li>
                    <a href='%s' _target='blank'>
                        <i class='%s' aria-hidden='true' data-toggle='tooltip' data-placement='top' title='Volg ons op %s'></i>
                    </a>
                </li>\n",
                $item->url,
                $class,
                $item->title
            );
        }


    }
}