<?
namespace Services;

class Db
{
/** @var \PDO */
    private $pdo;

    public function __construct()
    {
        $dbOptions = (require __DIR__ . '/../settings.php')['db'];

        $this->pdo = new \PDO(
            'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    }


    public function query(string $sql, array $params = [], string $className = 'stdClass'): ?array  // stdClass – это такой встроенный класс в PHP, у которого нет никаких свойств и методов.
        {
            $sth = $this->pdo->prepare($sql);
            $result = $sth->execute($params);

            if (false === $result) {
                return null;
            }

            return $sth->fetchAll(\PDO::FETCH_CLASS, $className);//В метод fetchAll() мы передали специальную константу - \PDO::FETCH_CLASS, она говорит о том, что нужно вернуть результат в виде объектов какого-то класса. Второй аргумент – это имя класса, которое мы можем передать в метод query().
        }
}


?>