<?php

    class ColonWalker extends Walker
    {
        public function walk( $elements, $max_depth )
        {
            $list = array ();

            foreach ( $elements as $item )
                $list[] = "<li><a href='$item->guid'>$item->post_title</a></li>";

            return join( ' :: ', $list );
        }
    }

?>