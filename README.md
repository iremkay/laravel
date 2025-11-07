# Laravel Docker Başlangıç Ortamı

Bu repo, Nginx ve PostgreSQL kullanarak Laravel projeleri geliştirmek için hazır bir Docker ortamı sağlar.

### Gereksinimler
- Docker
- Docker Compose

### Hızlı Kurulum ve Başlangıç

1.  **Repoyu Klonla**

    ```bash
    git clone https://github.com/akadal/laravel
    cd laravel
    ```

2.  **Docker Konteynerlarını Oluştur ve Başlat**

    Bu komut, gerekli imajları indirip build edecek ve konteynerları arka planda çalıştıracaktır.

    ```bash
    docker-compose up -d --build
    ```

3.  **Yeni Bir Laravel Projesi Oluştur**

    Aşağıdaki komut, çalışan `app` konteyneri içinde Composer'ı kullanarak `laravel` adında yeni bir proje oluşturur.

    ```bash
    docker-compose exec app composer create-project laravel/laravel laravel
    ```
    > **Not:** Nginx konfigürasyonu, projenin `laravel` isimli bir alt klasörde olmasını bekleyecek şekilde ayarlanmıştır.

    Eğer wsl içinde çalışıyorsanız bir kullanıcı çakışması yaşanıyor. "Permission" hatası alırsanız aşmak için "-u " ile user eşleştirmesi yaparak ilerlemelisiniz:

    ```bash
    docker-compose exec -u "$(id -u):$(id -g)" app composer create-project laravel/laravel laravel
    ```

5.  **`.env` Dosyasını Yapılandır**

    Proje ana dizininde, oluşturulan `laravel` klasörünün içindeki `.env.example` dosyasını kopyalayarak `.env` dosyasını oluşturun.

    ```bash
    cp laravel/.env.example laravel/.env
    ```

    Oluşturduğunuz `laravel/.env` dosyasını açın ve veritabanı ayarlarını aşağıdaki gibi güncelleyin:

    ```env
    DB_CONNECTION=pgsql
    DB_HOST=db
    DB_PORT=5432
    DB_DATABASE=laravel
    DB_USERNAME=user
    DB_PASSWORD=password
    ```

6.  **Uygulama Anahtarını (APP_KEY) Oluştur**

    ```bash
    docker-compose exec app php laravel/artisan key:generate
    ```

7. **Veritabanını Hazırla**

    ```bash
    docker-compose exec app php laravel/artisan migrate:fresh
    ```

### Erişim

Kurulum tamamlandı. Artık projenize tarayıcınızdan erişebilirsiniz:

**http://localhost:2020**
