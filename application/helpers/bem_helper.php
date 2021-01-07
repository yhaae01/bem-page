<?php 

function is_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', 
        '<div class="alert alert-danger" role="alert">
        Silahkan login terlebih dahulu!
        </div>');
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id');
        $menu    = $ci->uri->segment(1);

        $queryMenu  = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id    = $queryMenu['id'];

        $userAccess = $ci->db->get_where('user_accessmenu', [
            'role_id' => $role_id, 
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/block');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id); 
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_accessmenu');

    if ($result->num_rows() > 0) {
        return "checked = 'checked'";
    }
}   