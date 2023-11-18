Lab22- Ejecución de apps PHP con contenedores Docker [OPCIONAL] Parte A. Instalación de Docker 

1. Ingresar a https://www.docker.com/ 

![1](https://github.com/morenoaj/DesarrolloVII/assets/63484452/a1564bf4-c6e2-44c0-b4a9-cccdc5096824)

2. Registro en el sitio e acceder a los productos. 

![2](https://github.com/morenoaj/DesarrolloVII/assets/63484452/dc8ee866-9f41-4ef4-aa8a-fb105b47db4b)

3. Docker instalado.![3](https://github.com/morenoaj/DesarrolloVII/assets/63484452/8f9b6ae4-110a-45eb-b9f5-6070a7b1253f)

Parte B. Uso de DockerHub 

1. Ingresar a [ https://hub.docker.com/](https://hub.docker.com/) autenticarse en el sitio y buscar la imagen httpd(apache)

![4](https://github.com/morenoaj/DesarrolloVII/assets/63484452/2c8a3f2b-ea2d-4907-a35b-03e97669023e)

2. Descargar la imagen httpd con el siguiente comando *docker pull httpd ![5](https://github.com/morenoaj/DesarrolloVII/assets/63484452/6cce4c75-4faf-4cfd-8805-0cf0307892d2)*
2. Mostramos las imágenes con *docker images*, ejecutamos 2 contenedores apache1 con el puerto 3000:80 y apache11 con el puerto 3001:80. Comando de referencia: *docker run -d --name apache11 -p 3001:80 httpd* Posteriormente mostramos los contenedores corriendo.

![6](https://github.com/morenoaj/DesarrolloVII/assets/63484452/4d780e05-6a91-4f7e-8645-41d890003f1a)

4. Probamos la ejecución de apache en ambos contenedores puerto 3000 y 3001. 

   Puerto 3000 ![7](https://github.com/morenoaj/DesarrolloVII/assets/63484452/a2962b8b-03b1-4484-9e8f-f5da1cac15b0)

Puerto 3001 ![8](https://github.com/morenoaj/DesarrolloVII/assets/63484452/07bcc54f-29d6-4585-b908-087a84602d66)

5. Crear el siguiente código y guardarlo en C:\tmp\htdocs![9](https://github.com/morenoaj/DesarrolloVII/assets/63484452/d8404c28-d6aa-49a9-8b78-223015fb9373)
5. Entramos a la consola de apache del contenedor apache1 luego creamos un tercer contenedor que apunte hacia la carpeta donde esta nuestro .html creado usando el siguiente comando *docker run -d --name apache21 -v c:\tmp\htdocs\:/usr/local/apache2/htdocs -p 3002:80 httpd* Luego validamos que tenemos 3 contendores.

![10](https://github.com/morenoaj/DesarrolloVII/assets/63484452/36011ddd-2339-402a-a260-31404f72bf5e)

7. Podemos ver el resultado en nuestro navegador apuntando al puerto 3002![11](https://github.com/morenoaj/DesarrolloVII/assets/63484452/69be1459-7f3d-4506-bbf2-f48a909a20a8)

Parte C. Imagen XAMPP 

1. Ubicar la imagen phpid/xampp

![12](https://github.com/morenoaj/DesarrolloVII/assets/63484452/4e9bab66-8466-4cbc-832a-3886771fcf1b)

2. Instalar la imagen con el siguiente comando: *docker pull phpid/xampp ![13](https://github.com/morenoaj/DesarrolloVII/assets/63484452/98d40472-37c7-406a-b2c0-f18aaac0a033)*
2. Verificamos las imágenes, creamos un contendor sobre la imagen descargada y validamos que los contenedores estén en ejecución. 

![14](https://github.com/morenoaj/DesarrolloVII/assets/63484452/714d1a39-4ae4-41e9-881a-0e3385b86c79)

4. Iniciamos los servicios del contendor en ejecución ![15](https://github.com/morenoaj/DesarrolloVII/assets/63484452/04e767d1-84e7-476a-a844-7f7615e12ae9)
4. Validamos que este arriba xampp[` `*http://localhost:3010/dashboard/*](http://localhost:3010/dashboard/)![16](https://github.com/morenoaj/DesarrolloVII/assets/63484452/603c1783-e6c1-4740-9cdb-dba394e3ee10)

![17](https://github.com/morenoaj/DesarrolloVII/assets/63484452/13be2bac-4fd0-42f8-a21d-6e8bb43876fb)

6. Ahora creamos otro contenedor dentro del volumen C:\xampp\htdocs y levantamos los servicios.![18](https://github.com/morenoaj/DesarrolloVII/assets/63484452/b898ed57-6c2b-471f-a4fd-b1ed44a749fa)
6. Creamos un formulario holamundo.php y lo validamos.

![19](https://github.com/morenoaj/DesarrolloVII/assets/63484452/32fbcab1-fe15-4a28-a82b-5f230208ad60)

Parte D. Imagen personalizada XAMPP 

1. Crear este archivo llamado “Dockerfile” (sin extensión) y guardarlo en la carpeta c:\xampp\htdocs ![20](https://github.com/morenoaj/DesarrolloVII/assets/63484452/7f54cf7a-b5ad-4bd1-bda6-39ad7362cb07)
1. Construimos la imagen personalizada xampp-custom

![21](https://github.com/morenoaj/DesarrolloVII/assets/63484452/4de9c20f-6211-4a44-aefa-0cc69b79edf9)

3. Listamos las imágenes creadas, creamos el contenedor![22](https://github.com/morenoaj/DesarrolloVII/assets/63484452/13f2d784-018b-47ea-b83c-b8dbeb89158d)
3. Levantamos los servicios del contenedor creado

![23](https://github.com/morenoaj/DesarrolloVII/assets/63484452/8411ed46-5550-4344-841c-2b4e7e69801a)

5. Validamos en el navegador lo realizado.![](Aspose.Words.968b2258-c243-4606-a4e3-cdfa3c1a36a0.024.jpeg)
