<?php

/**
 *
 * @author Rafael Arend
 *
 **/

namespace Core;

class Piece
{
    // 1 = white
    // 2 = black
    // 3 = stone
    // 4 = dame
    // 1-12 = id

    private $id;
    private $type;
    private $color;

    public function __construct($id, $type, $color)
    {
        $this->id = $id;
        $this->type = $type;
        $this->color = $color;
    }

    public function isBlack()
    {
        if($this->color == 2)
        {
            return true;
        }
    }

    public function isWhite()
    {
        if($this->color == 1)
        {
            return true;
        }
    }

    public function isStone()
    {
        if($this->type == 3)
        {
            return true;
        }
    }

    public function isDame()
    {
        if($this->type == 4)
        {
            return true;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getColor()
    {
        return $this->color;
    }
}