<?php 

class Dbhndel {
  private const host = "localhost";
  private const user = "root";
  private const pwd = "";
  private const dbName = "pdo";
  
  public static  function connect() {
    try{
      $dsn = 'mysql:host=' . self::host . ';dbname=' . self::dbName;
      $pdo = new PDO($dsn, self::user, self::pwd);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      return $pdo;
    }
    catch(PDOException $e){
      echo $e->getMesage();
    }
   
  }
}