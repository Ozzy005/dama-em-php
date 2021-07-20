<?php

/**
 *
 * @author Rafael Arend
 *
 **/

class PlayerCurrent
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function make()
    {
        $last_move = $this->data->getValue('last-move');
        $player_top_right = $this->data->getValue('player-top-right');

        $player_current_left = $last_move === 'white' ? '2' : '1';

        if( $player_top_right === '1' )
        {
            if( $last_move === 'white' )
            {
                $player_current_top_right = '';
                $player_current_lower_right = 'player-current';
            }
            if( $last_move === 'black' )
            {
                $player_current_top_right = 'player-current';
                $player_current_lower_right = '';
            }
            if( $last_move === null )
            {
                $player_current_top_right = 'player-current';
                $player_current_lower_right = '';
            }
        }
        if( $player_top_right === '2' )
        {
            if( $last_move === 'white' )
            {
                $player_current_top_right = 'player-current';
                $player_current_lower_right = '';
            }
            if( $last_move === 'black' )
            {
                $player_current_top_right = '';
                $player_current_lower_right = 'player-current';
            }
            if( $last_move === null )
            {
                $player_current_top_right = '';
                $player_current_lower_right = 'player-current';
            }
        }

        $this->data->setValue('player-current-left',$player_current_left);
        $this->data->setValue('player-current-top-right',$player_current_top_right);
        $this->data->setValue('player-current-lower-right',$player_current_lower_right);
    }
}