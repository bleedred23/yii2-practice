<?

/* @var $this yii\web\View */


$this->title = 'Test page';

try {
    $connection = Yii::$app->db->createCommand('CREATE TABLE test (
        ID int,
        title text
    )')->queryAll();
} catch (\yii\db\Exception $e) {
    print($e->getMessage());
}
echo PHP_EOL;

$url = parse_url(getenv("DATABASE_URL"));
print('$url');
echo PHP_EOL;
var_dump($url);
echo PHP_EOL;

print('$connection');
echo PHP_EOL;
var_dump($connection);
echo PHP_EOL;