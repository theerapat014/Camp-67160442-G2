@extends('template.default')
@section('content')
    <div class="container">
        <h1 class="text-center">Work shop HTML_FORM</h1>

        <form class="needs-validation" novalidate action="#" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- 1. ชื่อและสกุล --}}
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="fname">ชื่อ</label>
                    <input id="fname" name="fname" type="text" class="form-control"
                        placeholder="พิมพ์ชื่อที่นี่..." required>
                    <div class="invalid-feedback">กรุณากรอกชื่อ.</div>
                    <div class="valid-feedback">Looks good!</div>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label" for="lname">สกุล</label>
                    <input id="lname" name="lname" type="text" class="form-control"
                        placeholder="พิมพ์สกุลที่นี่..." required>
                    <div class="invalid-feedback">กรุณากรอกสกุล.</div>
                    <div class="valid-feedback">Looks good!</div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="Date">วัน/เดือน/ปีเกิด</label>
                    <input id="Date" name="date" type="date" class="form-control w-100" required>
                    <div class="invalid-feedback">กรุณาเลือกวัน/เดือน/ปีเกิด.</div>
                    <div class="valid-feedback">OK!</div>
                </div>

                {{-- 3. อายุ --}}
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="age">อายุ</label>
                    <input id="age" name="age" type="number" class="form-control w-50"
                        placeholder="พิมพ์อายุที่นี่..." required min="1" max="150">
                    <div class="invalid-feedback">กรุณากรอกอายุให้ถูกต้อง.</div>
                    <div class="valid-feedback">Looks good!</div>
                </div>
            </div>
            {{-- 2. วัน/เดือน/ปีเกิด --}}


            {{-- 4. เพศ --}}
            <div class="mb-3">
                <label class="form-label d-block">เพศ</label>
                <div class="form-check form-check-inline">
                    <input id="gender-male" name="gender" type="radio" class="form-check-input" name="gender"
                        value="male" required>
                    <label class="form-check-label" for="gender-male">ชาย</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="gender-female" name="gender" type="radio" class="form-check-input" name="gender"
                        value="female">
                    <label class="form-check-label" for="gender-female">หญิง</label>
                </div>
                {{-- ลบ d-block ออก และใช้ style แทน --}}
                <div id="gender-feedback" class="invalid-feedback" style="display: none;">กรุณาเลือกเพศ.</div>
            </div>

            {{-- 5. รูป --}}
            <div class="mb-3">
                <label class="form-label" for="img">รูป</label>
                <input id="img" name="img" type="file" class="form-control w-50" required>
                <div class="invalid-feedback">กรุณาเลือกไฟล์รูปภาพ.</div>
                <div class="valid-feedback">Looks good!</div>
            </div>

            {{-- 6. ที่อยู่ --}}
            <div class="mb-3">
                <label class="form-label" for="address">ที่อยู่</label>
                <textarea id="address" name="address" class="form-control" rows="3" placeholder="พิมพ์ที่อยู่ที่นี่..."
                    required></textarea>
                <div class="invalid-feedback">กรุณากรอกที่อยู่.</div>
                <div class="valid-feedback">Looks good!</div>
            </div>

            {{-- 7. สีที่ชอบ --}}
            <div class="mb-3">
                <label class="form-label" for="color_select">สีที่ชอบ</label>
                <select name="color_select" id="color_select" class="form-select w-50" required>
                    <option value="" selected disabled>เลือกสีที่ชอบ...</option>
                    <option value="แดง" name ="color">แดง</option>
                    <option value="เหลือง" name ="color">เหลือง</option>
                    <option value="น้ำเงิน" name ="color">น้ำเงิน</option>
                    <option value="เขียว" name ="color">เขียว</option>
                </select>
                <div class="invalid-feedback">กรุณาเลือกสีที่ชอบ.</div>
                <div class="valid-feedback">Looks good!</div>
            </div>

            {{-- 8. แนวเพลงที่ชอบ --}}
            <div class="mb-3">
                <label class="form-label d-block" required>แนวเพลงที่ชอบ</label>
                <div class="form-check form-check-inline">
                    <input id="music-1" name="music[]" type="checkbox" class="form-check-input music-checkbox"
                        value="life">
                    <label class="form-check-label" for="music-1">เพื่อชีวิต</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="music-2" name="music[]" type="checkbox" class="form-check-input music-checkbox"
                        value="country">
                    <label class="form-check-label" for="music-2">ลูกทุ่ง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input id="music-3" name="music[]" type="checkbox" class="form-check-input music-checkbox"
                        value="other">
                    <label class="form-check-label" for="music-3">อื่น ๆ</label>
                </div>
                {{-- ข้อความแจ้งเตือน --}}
                <div id="music-feedback-invalid" class="text-danger mt-1" style="display: none; font-size: 0.875rem;">
                    โปรดเลือกแนวเพลงอย่างน้อย 1 ประเภท
                </div>
                <div id="music-feedback-valid" class="text-success mt-1" style="display: none; font-size: 0.875rem;">

                </div>
            </div>
            {{-- 9. กดยินยอม --}}
            <div class="form-check mt-3 mb-4">
                <input id="agree" type="checkbox" class="form-check-input" required>
                <label class="form-check-label" for="agree">ยินยอมให้เก็บข้อมูล</label>
                <div class="invalid-feedback">คุณต้องกดยินยอมเพื่อดำเนินการต่อ.</div>
            </div>

            <div class="text-center mt-4">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-success me-3">Submit</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        (function() {
            'use strict'

            // หา form ที่ต้องการตรวจสอบ
            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms).forEach(function(form) {

                // ตรวจสอบเมื่อกด submit
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)

                // ดักจับการเลือกเพศ
                const genderRadios = form.querySelectorAll("input[name='gender']");
                const genderFeedback = form.querySelector("#gender-feedback");

                if (genderRadios && genderFeedback) {
                    // เมื่อกด submit แล้วไม่เลือกเพศ ให้แสดงข้อความ
                    form.addEventListener('submit', function(e) {
                        const isGenderSelected = Array.from(genderRadios).some(radio => radio.checked);
                        if (!isGenderSelected) {
                            genderFeedback.style.display = "block";
                        }
                    });

                    // เมื่อเลือกเพศ ให้ซ่อนข้อความทันที
                    genderRadios.forEach(radio => {
                        radio.addEventListener("change", function() {
                            genderFeedback.style.display = "none";
                        });
                    });
                }

                // ดักจับการเลือกแนวเพลง
                const musicCheckboxes = form.querySelectorAll(".music-checkbox");
                const musicFeedbackInvalid = form.querySelector("#music-feedback-invalid");
                const musicFeedbackValid = form.querySelector("#music-feedback-valid");

                if (musicCheckboxes && musicFeedbackInvalid && musicFeedbackValid) {
                    // เมื่อกด submit แล้วไม่เลือกเพลงเลย ให้แสดงข้อความ
                    form.addEventListener('submit', function(e) {
                        const isMusicSelected = Array.from(musicCheckboxes).some(checkbox => checkbox
                            .checked);
                        if (!isMusicSelected) {
                            musicFeedbackInvalid.style.display = "block";
                            musicFeedbackValid.style.display = "none";
                        }
                    });

                    // เมื่อเลือกเพลง ให้ซ่อนข้อความแดง แสดงข้อความเขียว
                    musicCheckboxes.forEach(checkbox => {
                        checkbox.addEventListener("change", function() {
                            const isMusicSelected = Array.from(musicCheckboxes).some(cb => cb
                                .checked);
                            if (isMusicSelected) {
                                musicFeedbackInvalid.style.display = "none";
                                musicFeedbackValid.style.display = "block";
                            } else {
                                musicFeedbackInvalid.style.display = "block";
                                musicFeedbackValid.style.display = "none";
                            }
                        });
                    });
                }
            })
        })()
    </script>
@endpush
