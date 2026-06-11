<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Session $session
 * @property M_admin $m_admin
 */
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('M_admin', 'm_admin');
    }

    public function view($page = 'index')
    {
        $page = preg_replace('/\.html$/i', '', $page);
        $page = preg_replace('/[^a-z0-9\-]/i', '', $page);
        $filePath = APPPATH . 'views/admin/' . $page . '.html';

        if (!file_exists($filePath)) {
            show_404();
            return;
        }

        $content = file_get_contents($filePath);
        $assetBase = base_url('public/assets/assets/');
        $dashboardData = [
            'total_users' => $this->m_admin->count_users(),
            'total_wisata' => $this->m_admin->count_wisata(),
            'latest_users' => $this->m_admin->latest_users(),
            'latest_wisata' => $this->m_admin->latest_wisata(),
            'admin_label' => $this->session->userdata('nama_lengkap') ?: 'Admin User',
        ];

        $content = preg_replace_callback(
            '/\b(href|src)=("|\')(?:\.\/)?assets\/([^"\']+)\2/i',
            function ($matches) use ($assetBase) {
                return $matches[1] . '=' . $matches[2] . $assetBase . $matches[3] . $matches[2];
            },
            $content
        );

        $content = preg_replace_callback(
            '/href=("|\')([a-z0-9\-]+)\.html\1/i',
            function ($matches) {
                return 'href=' . $matches[1] . base_url('admin/' . $matches[2]) . $matches[1];
            },
            $content
        );

        $content = str_replace(
            'href="index.html"',
            'href="' . base_url('admin') . '"',
            $content
        );

        $content = str_replace(
            ['{{total_users}}', '{{total_wisata}}', '{{admin_label}}'],
            [
                number_format($dashboardData['total_users']),
                number_format($dashboardData['total_wisata']),
                htmlspecialchars($dashboardData['admin_label'], ENT_QUOTES, 'UTF-8'),
            ],
            $content
        );

        $latestUsersHtml = '';
        foreach ($dashboardData['latest_users'] as $user) {
            $initials = strtoupper(substr($user->nama_lengkap ?: $user->username, 0, 2));
            $latestUsersHtml .= '<li>'
                . '<div class="timeline-panel">'
                . '<div class="media me-2 media-primary">' . htmlspecialchars($initials, ENT_QUOTES, 'UTF-8') . '</div>'
                . '<div class="media-body">'
                . '<h6 class="mb-1">' . htmlspecialchars($user->nama_lengkap, ENT_QUOTES, 'UTF-8') . '</h6>'
                . '<small class="d-block">@' . htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8') . '</small>'
                . '</div></div></li>';
        }

            $latestWisataTimelineHtml = '';
            foreach ($dashboardData['latest_wisata'] as $wisata) {
                $latestWisataTimelineHtml .= '<li>'
                . '<div class="timeline-panel">'
                . '<div class="media me-2 media-primary">W</div>'
                . '<div class="media-body">'
                . '<h6 class="mb-1">Wisata #' . htmlspecialchars($wisata->id, ENT_QUOTES, 'UTF-8') . '</h6>'
                . '<small class="d-block">Budget: ' . htmlspecialchars($wisata->budget, ENT_QUOTES, 'UTF-8') . ' | Hari: ' . htmlspecialchars($wisata->hari, ENT_QUOTES, 'UTF-8') . '</small>'
                . '</div></div></li>';
            }

        $latestWisataHtml = '';
        foreach ($dashboardData['latest_wisata'] as $wisata) {
            $latestWisataHtml .= '<tr>'
                . '<td><strong>#WST-' . htmlspecialchars($wisata->id, ENT_QUOTES, 'UTF-8') . '</strong></td>'
                . '<td>' . htmlspecialchars($wisata->budget, ENT_QUOTES, 'UTF-8') . '</td>'
                . '<td>' . htmlspecialchars($wisata->hari, ENT_QUOTES, 'UTF-8') . '</td>'
                . '<td>' . htmlspecialchars($wisata->orang, ENT_QUOTES, 'UTF-8') . '</td>'
                . '<td>' . htmlspecialchars($wisata->jenis, ENT_QUOTES, 'UTF-8') . '</td>'
                . '</tr>';
        }

        $content = str_replace('{{latest_users}}', $latestUsersHtml, $content);
        $content = str_replace('{{latest_wisata_timeline}}', $latestWisataTimelineHtml, $content);
        $content = str_replace('{{latest_wisata}}', $latestWisataHtml, $content);

        echo $content;
    }

    public function index()
    {
        $this->view('index');
    }
}