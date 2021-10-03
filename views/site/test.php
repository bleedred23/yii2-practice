<?

/* @var $this yii\web\View */


$this->title = 'Test page';

$connection = Yii::$app->db->createCommand('CREATE TABLE test (
    ID int,
    title text
)');


$url = parse_url(getenv("DATABASE_URL"));
print('$url');
var_dump($url);

print('$connection');
var_dump($connection);