<?php

class JQueryTableDnD_HeadHelper extends App_ViewHelper_Abstract
{
    public function head()
    {
            $this->getView()->broker()->headScript()->append(
                $this->getView()->staticpath()
                    . 'jquery-tablednd/js/jquery.tablednd_0_5.js', 'jquery' );
    }
}