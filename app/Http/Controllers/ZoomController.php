<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ZoomController extends Controller
{

    protected $api_key = 'WwN0FSwTQ9iI43C6xd5m6g';
    protected $api_secret = 'bPF5okr7mIgA7XbPzwf7YBg0dNg31HsygJWe';
    public function index()
    {
        $user = User::findOrFail(1);

        $user->name = 'Victoria Faith'.time();

        $user->save();
        //Log::info(["index", $user]);
        $data = [
            'meeting_name' => 'Demo Zoom with Laravel', // Tên meeting
            'route_back_to_wait_room' => 'https://zoom.us', // Url sau khi kết thúc meeting zoom sẽ điều hướng đến
            'id_meeting_zoom' => '85856085980', // Id của meeting
            'password' => 'm1x35h', // Mật khẩu truy cập meeting đó (nếu có)
            'name' => 'Larvel', // Chính là tên chủ tạo ra meeting đó
            'api_key' => $this->api_key, // là api key trong app đã tạo
            'invite_zoom' => true, // chức năng muốn  hiển  thị danh sách đã mời hay không
            'signature' => $this->generate_signature($this->api_key, $this->api_secret,'85856085980',1), // chữ kỹ định danh cho meeting // Ở đây role có 3 kiểu 1: người chủ meeting , 0: người tham gia meeting , 5: người support cho người chủ meeting

        ];
        return view('zoom',['data' => $data]);
    }


    private function generate_signature ( $api_key, $api_secret, $meeting_number, $role){

        $time = time() * 1000 - 30000;//time in milliseconds (or close enough)

        $data = base64_encode($api_key . $meeting_number . $time . $role);

        $hash = hash_hmac('sha256', $data, $api_secret, true);

        $_sig = $api_key . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);

        //return signature, url safe base64 encoded
        return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=');
    }

}
