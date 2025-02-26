1. Primero de todo tener las issues creadas en GitHub.
2. Si tenéis el proyecto con el panel, poner la issue que vayáis a atacar en In progress
    + Para que el resto del equipo sepa con que está cada uno => Dar visibilidad al equipo
3. En local desde la rama master iniciar la siguiente rama de corta duración donde trabajaréis desarrollando la tarea.
    + git branch (<número-de-la-issue>-<nombre-de-la-issue>) => git branch 1-como-usuario-quiero-poder-consultar-la-información-de-un-streamer-de-twitch
    + git checkout 1-como-usuario-quiero-poder-consultar-la-información-de-un-streamer-de-twitch
4. Desarrollo de la tarea
5. Añadir los archivos que queréis añadir al commit
    + git add <archivo> // git add .
6. Hacer el commit
    + git commit -m "[#número de la issue] - Nombre de la issue"
7. Hacer git push para poder crear la PR en GitHub.
8. Como veis en la imagen si clicáis en el enlace que se crea os llevará directos para abrir la PR
9. Rellenar la descripción de la PR.
    + Añadir Resolves #número-de-la-issue para que cuando la PR se cierre se resuelva la issue cerrándola.
    + Para comprobar que se cerrará revisar el apartado de Development
10. Añadir compañeros para que la revisen.
11. Añadir quien ha realizado la tarea.
12. Esperar a que la revisen los compañeros y crear una discusión para mejorar entre todos el código.
13. Si no hay conflictos cerrarla. Si hay conflictos rebasear con master.
14. En local ir a la rama master y hacer git pull  para descargar los últimos cambios y empezar a desarrollar una nueva tarea.