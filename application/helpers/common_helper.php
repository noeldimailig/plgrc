<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('dd')) {
    function dd($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }
}

if (!function_exists('show')) {
    function show($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

if (!function_exists('template')) {
    function template($page = NULL, $data = [], $sidebar = TRUE, $topbar = TRUE, $footbar = TRUE)
    {
        $ci = &get_instance();

        // Include header (default)
        $ci->load->view('admin/partials/header', $data);

        // Include topbar in view
        if ($topbar) {
            $ci->load->view('admin/partials/topbar', $data);
        }

        // Include sidebar in view
        if ($sidebar) {
            $ci->load->view('admin/partials/sidebar', $data);
        }

        // Include main body (default)
        $ci->load->view('admin/' . $page, $data);

        // Include footbar in view
        if ($footbar) {
            $ci->load->view('admin/partials/footbar', $data);
        }

        // Include footer (default)
        $ci->load->view('admin/partials/footer', $data);
    }
}

if (!function_exists('main_template')) {
    function main_template($page = NULL, $data = [], $topbar = TRUE, $footbar = TRUE)
    {
        $ci = &get_instance();

        // Include header (default)
        $ci->load->view('main/partials/header', $data);

        // Include topbar in view
        if ($topbar) {
            $ci->load->view('main/partials/topbar', $data);
        }

        // Include main body (default)
        $ci->load->view('main/' . $page, $data);

        // Include footbar in view
        if ($footbar) {
            $ci->load->view('main/partials/footbar', $data);
        }

        // Include footer (default)
        $ci->load->view('main/partials/footer', $data);
    }
}

if (!function_exists('flash_alert')) {
    function flash_alert()
    {
        $ci = &get_instance();
        $alert = $ci->session->flashdata();

        if (empty($alert)) {
            return;
        }

        $key = array_keys($alert);
        $value = array_values($alert);

        if (count($key) > 1 && count($value) > 1) {
            foreach ($alert as $code => $message) {
                echo '<div class="alert alert-' . $code . '">' . $message . '</div>';
            }
        } else {
            switch ($key[0]) {
                case 'success':
                    echo '<div class="alert alert-success">' . $value[0] . '</div>';
                    break;
                case 'info':
                    echo '<div class="alert alert-info">' . $value[0] . '</div>';
                    break;
                case 'warning':
                    echo '<div class="alert alert-warning">' . $value[0] . '</div>';
                    break;
                case 'danger':
                    echo '<div class="alert alert-danger">' . $value[0] . '</div>';
                    break;
            }
        }
    }
}

if (!function_exists('selected_option')) {
    function selected_option($value, $selectedValue)
    {
        echo ($value == $selectedValue) ? 'selected' : '';
    }
}

if (!function_exists('checked_checkbox')) {
    function checked_checkbox($value, $selectedValues)
    {
        echo (in_array($value, $selectedValues)) ? 'checked' : '';
    }
}

if (!function_exists('checked_radio')) {
    function checked_radio($value, $selectedValue)
    {
        echo ($value == $selectedValue) ? 'checked' : '';
    }
}

function active_link($page)
{
    $ci = &get_instance();
    $segment = $ci->uri->segment(1);

    if ($segment == $page) {
        echo '';
    } else {
        echo 'collapsed';
    }
}

if (!function_exists('passwordhash')) {
    function passwordhash($password)
    {
        $options = array(
            'cost' => 4,
        );
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }
}

if (!function_exists('passwordverify')) {
    function passwordverify($password, $hash)
    {
        if (password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('generate_hash')) {
    function generate_hash()
    {
        $CI = &get_instance();
        return $CI->security->get_csrf_hash();
    }
}

function e($sData)
{
    $id = (float)$sData * 525325.24;
    return base64_encode($id);
}

function d($sData)
{
    $url_id = base64_decode($sData);
    $id = (float)$url_id / 525325.24;
    return $id;
}

if (!function_exists('encrypt_message')) {
    function encrypt_message($message, $encryption_key)
    {
        $key = hex2bin($encryption_key);
        $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
        $nonce = openssl_random_pseudo_bytes($nonceSize);
        $ciphertext = openssl_encrypt(
            $message,
            'aes-256-ctr',
            $key,
            OPENSSL_RAW_DATA,
            $nonce
        );
        return base64_encode($nonce . $ciphertext);
    }
}

if (!function_exists('decrypt_message')) {
    function decrypt_message($message, $encryption_key)
    {
        $key = hex2bin($encryption_key);
        $message = base64_decode($message);
        $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
        $nonce = mb_substr($message, 0, $nonceSize, '8bit');
        $ciphertext = mb_substr($message, $nonceSize, null, '8bit');
        $plaintext = openssl_decrypt(
            $ciphertext,
            'aes-256-ctr',
            $key,
            OPENSSL_RAW_DATA,
            $nonce
        );
        return $plaintext;
    }
}

// Global search for user portal
function search()
{
    $ci = &get_instance();

    echo '<div class="row mb-5">
    <div class="align-items-center">
        <form action="' . base_url('library/search') . '" method="get" class="d-flex align-items-center justify-content-center">
            <input class="col-md-6 me-2 form-control-lg d-sm-form-control-sm" id="q" name="q" type="text" placeholder="Search here..." value="' . $ci->input->get('q', true) . '">
            <button id="user-search-book" class="btn btn-danger d-inline-block" type="submit">Search</button>
        </form>
    </div>
</div>';
}

function form_search()
{
    echo '<form action="' . base_url('library/search') . '" method="get" class="d-flex align-items-center justify-content-center">
    <input class="col-md-6 me-2 form-control-lg d-sm-form-control-sm" id="q" name="q" type="text" placeholder="Search for book title, author, category here...">
    <button id="user-search-book" class="btn btn-danger d-inline-block d-sm-btn-sm" type="submit">Search</button>
</form>';
}

function active($url)
{
    $ci = &get_instance();
    $segment = $ci->uri->segment(1);

    if ($segment == $url) {
        return 'class="active"';
    }
}

function book($book_id)
{
    $ci = &get_instance();
    $ci->load->database();

    $book = $ci->db->get_where('books', ['book_id' => $book_id])->row();

    return $book->title;
}

function book_status($id)
{
    $ci = &get_instance();
    $ci->load->database();

    $book = $ci->db->get_where('books', ['book_id' => $id])->row();

    if ($book) {
        if ((int)$book->available_copies > 0) {
            return '<span class="badge bg-success">AVAILABLE</span>';
        } else {
            return '<span class="badge bg-secondary">NOT AVAILABLE</span>';
        }
    }
}

function uploadFile($name, $path, $type)
{
    $ci = &get_instance();

    $uploadPath = $path;
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, TRUE);
    }

    $config['upload_path'] = $uploadPath;
    $config['allowed_types'] = $type;
    $config['encrypt_name'] = TRUE;

    $ci->load->library('upload', $config);
    $ci->upload->initialize($config);
    if ($ci->upload->do_upload($name)) {
        $fileData = $ci->upload->data();
        return $fileData['file_name'];
    } else {
        return false;
    }
}

function read_more($story_desc, $link)
{
    //Number of characters to show  
    $chars = 200;
    $story_desc = substr($story_desc, 0, $chars);
    $story_desc = substr($story_desc, 0, strrpos($story_desc, ' '));
    $story_desc = $story_desc . " <a href='$link'>Read More...</a>";
    return $story_desc;
}

function active_dropdown($url)
{
    $ci = &get_instance();
    $segment = $ci->uri->segment(1) . '/' . $ci->uri->segment(2);

    if ($segment == $url) {
        return 'active';
    }
}

function book_cover($book_id)
{
    $ci = &get_instance();
    $ci->load->database();

    $book = $ci->db->get_where('books', ['book_id' => $book_id])->row();

    if ($book) {
        if ($book->file) {
            return base_url('uploads/books/' . $book->file);
        }
    } else {
        return base_url('uploads/books/book.png');
    }
}


function resize($width, $height, $path, $option = "exact", $imageQuality = "100")
{
    $ci = &get_instance();
    $ci->load->library('Resizer');

    $ci->resize->resizeImage($width, $height, $path, $option);

    // *** 2) Resize image (options: exact, height, width, auto, crop)
    $ci->resize->resizeImage($width, $height, $option);

    // *** 3) Save image
    $ci->resize->saveImage($path, $imageQuality);
}
