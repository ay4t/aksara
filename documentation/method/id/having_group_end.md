Kontribusi kalian dibutuhkan!

Silakan perbarui halaman ini melalui GitHub dengan menggunakan format standar berikut dilengkapi dengan kalimat pembukaan.

### Referensi
`having_group_end($foo, $bar)`

**Parameter**
* **$foo** [`string`] *keterangan terkait variabel;*
* **$bar** [`string`] *keterangan terkait variabel.*

&nbsp;

### Contoh Penggunaan
`$this->having_group_end('foo', 'bar');`

`$this->having_group_end('baz', 'qux');`

**Anda juga dapat menggunakan metode ini secara berkelompok seperti berikut:**
```php
$this->having_group_end([
    'foo' => 'bar',
    'baz' => 'qux'
]);
```

&nbsp;

### Baca Juga
* [having_group_start](./having_group_start)
* [or_having_group_start](./or_having_group_start)
* [not_having_group_start](./not_having_group_start)
* [or_not_having_group_start](./or_not_having_group_start)