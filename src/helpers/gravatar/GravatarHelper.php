<?php
namespace ntentan\extensions\social\helpers\gravatar;
use \ntentan\honam\Helper;

class GravatarHelper extends Helper 
{
    private $hash;
    private $size = 48;
    private $default = 'identicon';

    public function help($email) 
    {
        $this->hash = md5(strtolower(trim($email)));
        return $this;
    }

    public function size($size) 
    {
        $this->size = $size;
        return $this;
    }
    
    public function setDefault($default)
    {
        $this->default = $default;
    }

    public function __toString() 
    {
        return "http://www.gravatar.com/avatar/{$this->hash}.jpg?s={$this->size}&amp;d={$this->default}";
    }

}
