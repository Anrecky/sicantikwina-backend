<?php

return [

    "accepted" => ":attribute harus diterima.",
    "accepted_if" => ":attribute harus diterima ketika :other berisi :value.",
    "active_url" => ":attribute bukan URL yang valid.",
    "after" => ":attribute harus berisi tanggal setelah :date.",
    "after_or_equal" => ":attribute harus berisi tanggal setelah atau sama dengan :date.",
    "alpha" => ":attribute hanya boleh berisi huruf.",
    "alpha_dash" => ":attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.",
    "alpha_num" => ":attribute hanya boleh berisi huruf dan angka.",
    "array" => ":attribute harus berisi sebuah array.",
    "attached" => ":attribute sudah dilampirkan.",
    "before" => ":attribute harus berisi tanggal sebelum :date.",
    "before_or_equal" => ":attribute harus berisi tanggal sebelum atau sama dengan :date.",
    'between' => [
        'array' => ':attribute harus memiliki :min sampai :max anggota.',
        'file' => ':attribute harus berukuran antara :min sampai :max kilobita.',
        'numeric' => ':attribute harus bernilai antara :min sampai :max.',
        'string' => ':attribute harus berisi antara :min sampai :max karakter.',
    ],
    "boolean" => ":attribute harus bernilai 'ya' atau 'tidak'",
    "confirmed" => "Konfirmasi :attribute tidak cocok.",
    "current_password" => "Kata sandi salah.",
    "date" => ":attribute bukan tanggal yang valid.",
    "date_equals" => ":attribute harus berisi tanggal yang sama dengan :date.",
    "date_format" => ":attribute tidak cocok dengan format :format.",
    "declined" => ":attribute ini harus ditolak.",
    "declined_if" => ":attribute ini harus ditolak ketika :other bernilai :value.",
    "different" => ":attribute dan :other harus berbeda.",
    "digits" => ":attribute harus terdiri dari :digits angka.",
    "digits_between" => ":attribute harus terdiri dari :min sampai :max angka.",
    "dimensions" => ":attribute tidak memiliki dimensi gambar yang valid.",
    "distinct" => ":attribute memiliki nilai yang duplikat.",
    "doesnt_end_with" => ":attribute tidak boleh diakhiri dengan salah satu dari berikut ini: :values.",
    "doesnt_start_with" => ":attribute tidak boleh dimulai dengan salah satu dari berikut ini: :values.",
    "email" => ":attribute harus berupa alamat surel yang valid.",
    "ends_with" => ":attribute harus diakhiri salah satu dari berikut: :values",
    "enum" => ":attribute yang dipilih tidak valid.",
    "exists" => ":attribute yang dipilih tidak valid.",
    "failed" => "Identitas tersebut tidak cocok dengan data kami.",
    "file" => ":attribute harus berupa sebuah berkas.",
    "filled" => ":attribute harus memiliki nilai.",
    'gt' => [
        'array' => ':attribute harus memiliki lebih dari :value anggota.',
        'file' => ':attribute harus berukuran lebih besar dari :value kilobita.',
        'numeric' => ':attribute harus bernilai lebih besar dari :value.',
        'string' => ':attribute harus berisi lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => ':attribute harus terdiri dari :value anggota atau lebih.',
        'file' => ':attribute harus berukuran lebih besar dari atau sama dengan :value kilobita.',
        'numeric' => ':attribute harus bernilai lebih besar dari atau sama dengan :value.',
        'string' => ':attribute harus berisi lebih besar dari atau sama dengan :value karakter.',
    ],
    "image" => ":attribute harus berupa gambar.",
    "in" => ":attribute yang dipilih tidak valid.",
    "in_array" => ":attribute tidak ada di dalam :other.",
    "integer" => ":attribute harus berupa bilangan bulat.",
    "ip" => ":attribute harus berupa alamat IP yang valid.",
    "ipv4" => ":attribute harus berupa alamat IPv4 yang valid.",
    "ipv6" => ":attribute harus berupa alamat IPv6 yang valid.",
    "json" => ":attribute harus berupa JSON string yang valid.",
    "lowercase" => ":attribute harus huruf kecil.",
    'lt' => [
        'array' => ':attribute harus memiliki kurang dari :value anggota.',
        'file' => ':attribute harus berukuran kurang dari :value kilobita.',
        'numeric' => ':attribute harus bernilai kurang dari :value.',
        'string' => ':attribute harus berisi kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => ':attribute harus tidak lebih dari :value anggota.',
        'file' => ':attribute harus berukuran kurang dari atau sama dengan :value kilobita.',
        'numeric' => ':attribute harus bernilai kurang dari atau sama dengan :value.',
        'string' => ':attribute harus berisi kurang dari atau sama dengan :value karakter.',
    ],
    "mac_address" => ":attribute harus berupa alamat MAC yang valid.",
    'max' => [
        'array' => ':attribute maksimal terdiri dari :max anggota.',
        'file' => ':attribute maksimal berukuran :max kilobita.',
        'numeric' => ':attribute maksimal bernilai :max.',
        'string' => ':attribute maksimal berisi :max karakter.',
    ],
    "max_digits" => ":attribute tidak boleh memiliki lebih dari :max digit.",
    "mimes" => ":attribute harus berupa berkas berjenis: :values.",
    "mimetypes" => ":attribute harus berupa berkas berjenis: :values.",
    'min' => [
        'array' => ':attribute minimal terdiri dari :min anggota.',
        'file' => ':attribute minimal berukuran :min kilobita.',
        'numeric' => ':attribute minimal bernilai :min.',
        'string' => ':attribute minimal berisi :min karakter.',
    ],
    "min_digits" => ":attribute tidak boleh memiliki kurang dari :min digit.",
    "multiple_of" => ":attribute harus merupakan kelipatan dari :value",
    "next" => "Berikutnya &raquo;",
    "not_in" => ":attribute yang dipilih tidak valid.",
    "not_regex" => "Format :attribute tidak valid.",
    "numeric" => ":attribute harus berupa angka.",
    "password" => "Kata sandi salah.",
    'password' => [
        'letters' => ':attribute ini harus memiliki setidaknya satu karakter.',
        'mixed' => ':attribute ini harus memiliki setidaknya satu huruf kapital dan satu huruf kecil.',
        'numbers' => ':attribute ini harus memiliki setidaknya satu angka.',
        'symbols' => ':attribute ini harus memiliki setidaknya satu simbol.',
        'uncompromised' => ':attribute ini telah muncul di kebocoran data. Silahkan memilih :attribute yang berbeda.',
    ],
    "present" => ":attribute wajib ada.",
    "previous" => "&laquo; Sebelumnya",
    "prohibited" => ":attribute tidak boleh ada.",
    "prohibited_if" => ":attribute tidak boleh ada bila :other adalah :value.",
    "prohibited_unless" => ":attribute tidak boleh ada kecuali :other memiliki nilai :values.",
    "prohibits" => ":attribute melarang isian :other untuk ditampilkan.",
    "regex" => "Format :attribute tidak valid.",
    "relatable" => ":attribute ini mungkin tidak berasosiasi dengan sumber ini.",
    "required" => ":attribute wajib diisi.",
    "required_array_keys" => ":attribute wajib berisi entri untuk: :values.",
    "required_if" => ":attribute wajib diisi bila :other adalah :value.",
    "required_if_accepted" => ":attribute wajib diisi bila :other sesuai.",
    "required_unless" => ":attribute wajib diisi kecuali :other memiliki nilai :values.",
    "required_with" => ":attribute wajib diisi bila terdapat :values.",
    "required_with_all" => ":attribute wajib diisi bila terdapat :values.",
    "required_without" => ":attribute wajib diisi bila tidak terdapat :values.",
    "required_without_all" => ":attribute wajib diisi bila sama sekali tidak terdapat :values.",
    "reset" => "Kata sandi Anda sudah direset!",
    "same" => ":attribute dan :other harus sama.",
    "sent" => "Kami sudah mengirim surel yang berisi tautan untuk mereset kata sandi Anda!",
    'size' => [
        'array' => ':attribute harus mengandung :size anggota.',
        'file' => ':attribute harus berukuran :size kilobyte.',
        'numeric' => ':attribute harus berukuran :size.',
        'string' => ':attribute harus berukuran :size karakter.',
    ],
    "starts_with" => ":attribute harus diawali salah satu dari berikut: :values",
    "string" => ":attribute harus berupa string.",
    "throttle" => "Terlalu banyak upaya masuk. Silahkan coba lagi dalam :seconds detik.",
    "throttled" => "Harap tunggu sebelum mencoba lagi.",
    "timezone" => ":attribute harus berisi zona waktu yang valid.",
    "token" => "Token pengaturan ulang kata sandi tidak sah.",
    "unique" => ":attribute sudah ada sebelumnya.",
    "uploaded" => ":attribute gagal diunggah.",
    "uppercase" => "The :attribute must be uppercase.",
    "url" => "Format :attribute tidak valid.",
    "user" => "Kami tidak dapat menemukan pengguna dengan alamat surel tersebut.",
    "uuid" => ":attribute harus merupakan UUID yang valid.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'wb_name' => 'Nama Pelapor',
        'wb_gender' => 'Jenis Kelamin Pelapor',
        'wb_address' => 'Alamat Pelapor',
        'wb_phone' => 'No. Telepon Pelapor',
        'wb_dob' => 'Tanggal Lahir Pelapor',

        'bride_name' => 'Nama Pengantin Perempuan',
        'bride_address' => 'Alamat Pengantin Perempuan',
        'bride_phone' => 'No. Telepon Pengantin Perempuan',
        'bride_dob' => 'Tanggal Lahir Pengantin Perempuan',

        'groom_name' => 'Nama Pengantin Laki - Laki',
        'groom_address' => 'Alamat Pengantin Laki - Laki',
        'groom_phone' => 'No. Telepon Pengantin Laki - Laki',
        'groom_dob' => 'Tanggal Lahir Pengantin Laki - Laki',

        'chronology' => 'Kronologi',
        'relationship' => 'Hubungan dengan terlapor',
        'title' => 'judul',
        'description' => 'deskripsi',
        'is_publish' => 'publikasi'
    ],

];
