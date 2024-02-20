<?php

/**
 * Method successResponse
 *
 * @param $message $message [string]
 * @param $data $data [array]
 *
 * @return void
 */
function successResponse($message, $data) 
{
    die(json_encode(array("status" => true, "message" => $message, "data" => $data)));
}

/**
 * Method errorResponse
 *
 * @param $message $message [string]
 *
 * @return json
 */
function errorResponse($message = "")
{
    die(json_encode(array("status" => false, "message" => $message)));
}

?>