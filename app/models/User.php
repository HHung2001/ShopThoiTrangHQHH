<?php
class User{
  public static function create($UserName, $Pass, $FullName) {
    global $pdo;
    
    $sql = "INSERT INTO user(UserName, Pass, FullName) VALUES (:UserName, :Pass, :FullName)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':UserName', $UserName);
    $stmt->bindParam(':Pass', $Pass);
    $stmt->bindParam(':FullName', $FullName);

    return $stmt->execute();
  }

  public static function find($UserName) {
    global $pdo;
    
    $sql = "SELECT * FROM user WHERE UserName = :UserName";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':UserName', $UserName);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function update($userId, $avatar) {
    global $pdo;
    
    $sql = "UPDATE user SET Avatar = :Avatar where Id = :Id";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':Avatar', $avatar);
    $stmt->bindParam(':Id', $userId);

    return $stmt->execute();
  }
}
