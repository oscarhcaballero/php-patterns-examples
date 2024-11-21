# Ejemplos de escenarios de la vida real para usar STRATEGY

Rifle en el que se pueden cargar diferentes tipos de balas, según el cargador que le metas.
------------------------------------------------------------------------------------------
El Contexto sería el arma, el rifle, la escopeta, etc.

La Interfaz de Strategy sería el cargador
Las implementaciones de la interfaz serían el tipo de balas: 7mm  9mm  22mm etc

Cuando se crea el Contexto en el cliente, se le inyecta la Estrategia concreta, igual que 
cuando metes el cargador en el arma. 

El Contexto tiene un método setStrategy(Strategy $Strategy) para cambiar la Estrategia en tiempo de ejecución,
como cuando recargas el arma con otro tipo de balas.

Cada Estrategia tiene el método execute()
que es como si la bala fuera percutida y saliera disparada.

Desde el Contexto, después de cargar la Estrategia concreta, se ejecuta un método  do_action() que es el que
ejecuta el método execute de la Estrategia inyectada,
Ese do_action() se podría llamar   apretar_gatillo() en el ejemplo.



Robot de cocina con accesorios para batir, triturar, amasar....
------------------------------------------------------------------------
El Contexto sería el electrodoméstico robot de cocina.

La Interfaz de Strategy sería Accesorio
Las implementaciones de la interfaz serían el tipo de accesorios: batidora, trituradora, amasadora...

Cuando se crea el Contexto en el cliente, se le inyecta la Estrategia concreta, igual que 
cuando acoplas un accesorioconcreto en el robot de cocina. 

El Contexto tiene un método setStrategy(Strategy $Strategy) para cambiar la Estrategia en tiempo de ejecución,
como cuando cambias de accesorio.

Cada Estrategia tiene el método execute() el cual tiene la implementación concreta
que sería la forma de actuar que tiene el accesorio sobre el alimento que introduces en él.

Desde el Contexto, después de cargar la Estrategia concreta, se ejecuta un método  do_action() que es el que
ejecuta el método execute de la Estrategia inyectada.
Ese do_action() se podría llamar  activar_robot()  en el ejemplo.

