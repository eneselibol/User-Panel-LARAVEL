Laravel ile oluşturulmuş Kullanıcı panel sistemi  
Bilgilerin mysql ile local db üzerinde tutuldurğu üye kayıt, üye giriş ve bilgileri düzenleme ekranı bulunmaktadır.

- Migrations yapısı ile veritabanına tablo oluşturulmuş ve bu tablo içerisine gerekli alanlar eklenmiştir.
- 'php artisan migrate' ile çalıştırabilirsiniz
- Yeni Migration oluşturma: php artisan make:migration (migration-file-name)  --create=(table-name)
- Üye kaydı yapıldıktan sonra üye giriş için Auth::attempt($credetials) yapısı kullanılmış olup veritabanında üye bilgisi kontrol edilmiştir.
- Üye parolası hash sistemi ile veritabanına kaydedilmiştir.
- Üye girişi sağlandıktan sonra session yapısı ile üye kontrolü sayfalar arası sağlanmıştır.

<img width="904" alt="image" src="https://github.com/user-attachments/assets/7b0fea8d-f1cb-4354-983d-fcfe9569681d">
<img width="845" alt="image" src="https://github.com/user-attachments/assets/0864d919-9f76-4d83-aa7e-c8029dfe1e6a">
<img width="919" alt="image" src="https://github.com/user-attachments/assets/8560b2d4-dfe8-49f1-b98d-8a66023501da">
<img width="1051" alt="image" src="https://github.com/user-attachments/assets/87f40491-1e35-462c-9a58-bbe84adb33b3">


