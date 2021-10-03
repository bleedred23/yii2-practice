<?

/* @var $this yii\web\View */


$this->title = 'Test page';

$connection = Yii::$app->db->createCommand('CREATE TABLE test (
    ID int,
    title text
)');

