## YourBooks 

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="https://www.facebook.com/Hibu-Solutions-2339858166096856"><img src="https://scontent.fsal3-1.fna.fbcdn.net/v/t1.0-0/p180x540/76935588_2630418597040810_7807970881627488256_o.jpg?_nc_cat=101&_nc_ohc=kVOAUY55-PUAQnNVfmp-j8Os1AyWS7pHYfa7ohDkkTPPs-5QGchkeJWRw&_nc_ht=scontent.fsal3-1.fna&oh=ac99d21b68a475cd19d5f593b1e4604d&oe=5E74AC72" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
       <a target="_blank" class="btn btn-primary ml-3" href="{{$contactos->fb}}"><i class="fab fa-facebook-square"></i></a>
      <a target="_blank" class="btn btn-warning ml-2" href="{{$contactos->in}}"><i class="fab fa-instagram"></i></a>
      <a target="_blank" class="btn btn-danger ml-2" href="{{$contactos->yt}}"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </div>
</div>


## HibuSolutions

Team dedicado al desarrollo de apps moviles y sitios web



# clone
git clone https://github.com/HibuSolutions/yourbooks.git

# Access project
cd yourbooks


# Instalar  dependencias desde la consola
composer install

# crear archivo .env o renombrar el que esta en el proyecto
-> .env.example -> .env

#Configurar el archivo .env para  la conexion a la base de datos

# Generate key
php artisan key:generate


