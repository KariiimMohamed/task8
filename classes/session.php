<?php
class Session {
  
  // start the session
  public  function start() {
    session_start();
  }

  // set a value in session
  public  function set($key, $value) {
    $_SESSION[$key] = $value;
  }

  // get a value from session
  public  function get($key) {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
  }

  // check if a key is set in session
  public  function isset($key) {
    return isset($_SESSION[$key]);
  }

  // flash a message to session
  public  function flash($key, $value) {
    $_SESSION[$key] = $value;
  }

  // get the flashed message from session and delete it
  public  function getFlash($key) {
    if (isset($_SESSION[$key])) {
      $value = $_SESSION[$key];
      unset($_SESSION[$key]);
      return $value;
    }
    return null;
  }

  // get all data stored in session
  public  function all() {
    return $_SESSION;
  }

  // delete a value from session
  public  function delete($key) {
    unset($_SESSION[$key]);
  }

  // get the previous value stored in session
  public  function old($key) {
    return isset($_SESSION['_old'][$key]) ? $_SESSION['_old'][$key] : null;
  }

  // set the current value as the previous value
  public  function setOld($key) {
    $_SESSION['_old'][$key] = self::get($key);
  }

  // clear all session data
  public  function clear() {
    session_unset();
    session_destroy();
  }
}

?>
