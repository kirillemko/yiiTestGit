<?
function exception_handler($exception) {
    echo "Неперехваченное исключение: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');


try {
    throw new Exception('asfdasdfas');
} catch (Exception $e) {
    echo 1;
}

