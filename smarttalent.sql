codigo para prueba sql anterior en smart talent


1)	del siguiente esquema de bases de datos seleccione la opción que mejor describe a la columna customer_id en la tabla
	pucharse_order
	-foreign key

2)	wich sql command do you use to add a row in a table of a database
	- insert


3) 	seleccione las opciones correctas respecto a las primary key

	- it can hace a acharacter data type like('varchar') 
	- it cannot contain any duplicate values


4) 	modifique el query para obtener la lista de las ciudades de los clientes, la lista no debe contener duplicados 
	y debe estar estar ordenada en orden alfabetico.
	--select distinct CITY from customer order by CITY



5) 	--select VEHICLE_PART_LOCATION_ID, RFID from vehicle_part_location a 
	join vehicle_part b on a.vehicle_part_id= b.vehicle_part_id 
	where arrived_timestamp is not null and left_timestamps <= arrived arrived_timestamp


6)	modifique la consulta para enumerar el número de vehículos por marca de vehículo. 
	Solo enumere las marcas de vehículos donde el número de vehículos por marca sea dos o más.(SOLO MUESTRE MAKE 
	Y VEHICLE_MAKE_COUNT EN ESE ORDEN)

	--select MAKE, count(MAKE) as VEHICLE_MAKE_COUNT from VEHICLE V group by MAKE having count(MAKE) >1


7) 	modifique el query para listar los clientes que tengan un codigo zip igual a 75000 o 34000 
	y quienes tengas fecha de cumpleaños definida (SOLO MUESTRE LASTNAME Y FIRSTNAME EN ESE ORDEN )

	-- select LASTNAME, FIRSTNAME from customer where zipcode = 75000 or zipcode = 34000 and birth_date is not null


8)	modifique el query para seleccionar solo los vehiculos que no tengan partes de vehiculos asociadas 
	(SOLO MUESTRE COMO SALIDA VEHICLE ID)

	--select VEHICLE_ID from VEHICLE where VEHICLE_ID NOT IN(select VEHICLE_ID from VEHICLE V JOIN VEHICLE_PART VP 
	on V.VEHICLE_ID =VP.VEHICLE_ID) 

9)	-----------------------------------------------------------------------------------------------------------------------


10)	modifique el query para seleccionar solo los clientes cuyo apellido comienza con la letra W ordenados alfabeticamente
	por apellido y despues por nombre (solo muestre las columnas LASTNAME Y FIRSTNAME EN ESE ORDEN)

	--select LASTNAME, FIRSTNAME from customers where LASTNAME like 'W%' order by LASTNAME, FIRSTNAME

11) modifique el query para seleccionar los vehiculos cuyo nombre comience con G ordene alfabeticamente por marca y modelo
	(MUESTRE SOLAMENTE LOS CAMPOS MARCA Y MODELO EN ESE ORDEN)

	-- select MAKE, MODEL from vehicle where VEHICLE_NAME like 'G%' order by MAKE, MODEL

12)	----------------------------------------------------------------------------------------------------------------------

13)	modifique la consulta para listar todos los productos y sus categorías asociadas si tienen una. 
	de lo contrario no devuelve ningún valor (nulo) como categoría. 
	(muestre solo los campos PRODUCT_NAME and CATEGORY_NAME EN ESE ORDEN)

	-- select p.NAME as PRODUCT_NAME, c.NAME AS CATEGORY_NAME from product p 
	   left join product category on p.product_category_id = c.product_category_id