<?php


namespace App\Traits;


trait SweetAlert
{
    /**
     * Popup sweetalert modal
     *
     * @param string $titleText fire message
     * @param string $icon info|warning|success|error
     * @param string $html html text as subtitle
     * @param array $options extra sweetalert options
     * @return void
     */
    public function fire(string $titleText, string $icon = null, $html = null, $options = [])
    {
        $this->emit('swal:fire', array_merge(compact('titleText', 'icon', 'html'), $options));
    }


    /**
     * Popup sweet alert toast
     *
     * @param string $titleText toast message
     * @param string $icon info|warning|success|error
     * @param integer $timeout duration to hide
     * @return void
     */
    public function toast(string $titleText, string $icon = 'info', int $timeout = 5000)
    {
        $this->emit('swal:toast', compact('titleText', 'icon', 'timeout'));
    }

    /**
     * Popup sweetalert confirmation
     *
     * @param string $title toast message
     * @param string $icon info|warning|success|error
     * @param string $text text
     * @param string $confirmButtonText confirm text
     * @param method $method return method
     * @param array $params parameter
     * @param function $callback callback function/default nothing
     * @return void
     */
    public function showConfirmation($title = null, $icon, $text = null, $confirmButtonText = null, $method = null, $params = [], $callback = '')
    {
        $this->emit("swal:confirm", compact('title', 'icon', 'text', 'confirmButtonText', 'method', 'params', 'callback'));
    }


}
