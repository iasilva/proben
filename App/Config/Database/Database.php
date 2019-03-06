<?php

namespace App\Config\Database;
/**
 * Classe de conexão ao banco de dados usando PDO no padrão Singleton.
 * Modo de Usar:
 * require_once './Database.class.php';
 * $db = Database::conexao();
 * E agora use as funções do PDO (prepare, query, exec) em cima da variável $db.
 */
class Database
{
    # Variável que guarda a conexão PDO.
    protected static $db;


    # Private construct - garante que a classe só possa ser instanciada internamente.
    private function __construct()
    {
        # Informações sobre o banco de dados:
        include_once DIR.DS.'App'.DS.'Config'.DS.'config.php'; // Arquivo de configuração incluído com dados do BD
        $configJson=json_decode(file_get_contents(DIR.'/App/Config/config.json'));
        $ambiente=$configJson->ambiente;   //producao ou desenvolvimento
        $db_host = $database[$ambiente]['host'];
        $db_usuario = $database[$ambiente]['user'];
        $db_senha = $database[$ambiente]['pass'];
        $db_driver= $database[$ambiente]['system'];
        $db_nome= $database[$ambiente]['name'];
        # Informações sobre o sistema:
        $sistema_titulo = $configJson->name;
        $sistema_email = ($configJson->ambiente==='producao')?$configJson->email:'';

        try
        {
            # Atribui o objeto PDO à variável $db.
            self::$db = new \PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
            # Garante que o PDO lance exceções durante erros.
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            # Garante que os dados sejam armazenados com codificação UFT-8.
            self::$db->exec('SET NAMES utf8');
        }
        catch (PDOException $e)
        {
            # Envia um e-mail para o e-mail oficial do sistema, em caso de erro de conexão.
            if($configJson->ambiente==='producao'){
                mail($sistema_email, "PDOException em $sistema_titulo", $e->getMessage());
            }
            # Então não carrega nada mais da página.
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    # Método estático - acessível sem instanciação.
    public static function conexao()
    {
        # Garante uma única instância. Se não existe uma conexão, criamos uma nova.
        if (!self::$db)
        {
            new Database();
        }

        # Retorna a conexão.
        return self::$db;
    }

}