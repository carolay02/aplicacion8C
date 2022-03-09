<!doctype html>
<html>
<head>
    <title></title>
</head>
  <body>
    <h1>Sobre nosotros</h1>
  </body>
</html>
<?php   
public function view($page = 'home')
{
    if (! is_file(APPPATH . 'Views/' . $page . '.php')) {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    $data['title'] = ucfirst($page); // Capitalize the first letter

    echo view('header', $data);
    echo view('pages/' . $page, $data);
    echo view('footer', $data);
}
?>
