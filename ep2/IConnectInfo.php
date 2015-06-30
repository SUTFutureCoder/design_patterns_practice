<?php
interface IConnectInfo{
    const HOST = 'localhost';
    const UNAME = 'root';
    const DBNAME = 'paike';
    const PW = 'jasonye';
    public function testConnection();
}