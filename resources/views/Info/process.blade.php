@extends('template.default')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4">ข้อมูลที่กรอก</h1>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <span>ชื่อ:</span>
                        <span>{{ $fname }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>สกุล:</span>
                        <span>{{ $lname }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>วัน/เดือน/ปีเกิด:</span>
                        <span>
                            @php
                                $thaiMonths = [
                                    '01' => 'มกราคม',
                                    '02' => 'กุมภาพันธ์',
                                    '03' => 'มีนาคม',
                                    '04' => 'เมษายน',
                                    '05' => 'พฤษภาคม',
                                    '06' => 'มิถุนายน',
                                    '07' => 'กรกฎาคม',
                                    '08' => 'สิงหาคม',
                                    '09' => 'กันยายน',
                                    '10' => 'ตุลาคม',
                                    '11' => 'พฤศจิกายน',
                                    '12' => 'ธันวาคม',
                                ];
                                $dateArray = explode('-', $date);
                                $year = $dateArray[0] + 543; // แปลงเป็น พ.ศ.
                                $month = $thaiMonths[$dateArray[1]];
                                $day = (int) $dateArray[2];
                            @endphp
                            {{ $day }} {{ $month }} {{ $year }}
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>อายุ:</span>
                        <span>{{ $age }} ปี</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>เพศ:</span>
                        <span>{{ $gender == 'male' ? 'ชาย' : 'หญิง' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>สีที่ชอบ:</span>
                        <span>
                            @php
                                $colors = [
                                    'red' => 'แดง',
                                    'yellow' => 'เหลือง',
                                    'blue' => 'น้ำเงิน',
                                    'green' => 'เขียว',
                                ];
                            @endphp
                            {{ $colors[$color_select] ?? $color_select }}
                        </span>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                            <span>แนวเพลงที่ชอบ:</span>
                            <span>
                                @if (is_array($music) && count($music) > 0)
                                    @php
                                        $musicTypes = [
                                            'life' => 'เพื่อชีวิต',
                                            'country' => 'ลูกทุ่ง',
                                            'other' => 'อื่น ๆ',
                                        ];
                                        $musicList = array_map(function ($m) use ($musicTypes) {
                                            return $musicTypes[$m] ?? $m;
                                        }, $music);
                                    @endphp
                                    {{ implode(', ', $musicList) }}
                                @else
                                    ไม่ได้เลือก
                                @endif
                            </span>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>ที่อยู่:</span>
                        <span>{{ $address }}</span>
                    </li>
                </ul>
                <div class="text-center mt-4">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">กลับ</a>
                </div>
            </div>
        </div>
    </div>
@endsection
