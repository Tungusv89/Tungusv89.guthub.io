<php?
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$phone = htmlspecialchars($phone);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);
$phone = urldecode($phone);

$name = trim($name);
$email = trim($email);
$message = trim($message);
$phone = trim($phone);

echo $name;
echo '<br>';
echo $email;

mail("altina_19@mail.ru", "Заявка с сайта", "Имя".$name.". E-mail: ".$email.". Сообщение: ".$message.". Телефон: ".$phone ,"From: example2@mail.ru \r\n");

if (mail("altina_19@mail.ru", "Заявка с сайта", "Имя".$name.". E-mail: ".$email.". Сообщение: ".$message.". Телефон: ".$phone ,"From: example2@mail.ru \r\n"))
 { 
    echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки"; 
}
