<?php
    header('Access-Control-Allow-Origin: http://localhost:5173');
    header('Access-Control-Allow-Origin: https://buku-kategori.vercel.app');
    header('Access-Control-Allow-Header: Content-Type');
    header('Access-Control-Allow-Method: GET, POST, OPTION');
    function getConnection() {
        $host = 'localhost';
        $dbname = 'id20997286_crytalstore';
        $username = 'id20997286_root';
        $password = 'Gibran123@';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
?>