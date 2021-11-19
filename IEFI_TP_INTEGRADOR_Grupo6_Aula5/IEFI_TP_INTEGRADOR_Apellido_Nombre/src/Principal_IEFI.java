import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.Scanner;
import javax.swing.JOptionPane;

public class Principal_IEFI {

    public static void main(String[] args) throws SQLException {
//Luego creo un objeto del tipo conexion, donde devuelvo la conexion establecida
//Connection conexion = mi_conexion.conectar_db();
Conectar mi_conecion = new Conectar("","","");
//para listar
mi_conecion.listar();

        Scanner entrada =new Scanner(System.in);
        
        System.out.println("\nElige una opción: \n1:Listar \n2:Insertar \n3:Actualizar \n4:Borrar ");
        
        int varOpracion=entrada.nextInt();

switch (varOpracion){
    case 1: 
//a. Consultar datos o registros (QUERY).
System.out.println("Solo listar?");
mi_conecion.listar();
 break;
 
    case 2: 
//b. Registrar datos o registros (INSERT).       
mi_conecion.insertar();
mi_conecion.listar();
 break;
 
     case 3: 
//c. Modificar datos o registros (UPDATE).
mi_conecion.actualizar();
mi_conecion.listar();
 break;
 
     case 4: 
//d. Eliminar datos o registros (DELETE).
mi_conecion.borrar();
mi_conecion.listar();
 break;

     default:
System.out.println("Debe elegit una opcion");

}

    }
    
}
