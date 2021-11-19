import com.mysql.cj.xdevapi.Result;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Scanner;
import javax.swing.JOptionPane;

//public class Conectar extends DatosConexion{
public class Conectar {    
//Declaro las variables que voy a usar de esta dorma las hago global
//    public static final String URL = "jdbc:mysql://168.197.48.110:3306/c2110488_PrIspc";
//    public static final String USER = "c2110488_PrIspc";
//    public static final String CLAVE = "98movadoDO";

//Atributos
 private String URL;
 private String USER;
 private String CLAVE;
//constructor forma 
    public Conectar(String URL, String USER, String CLAVE) {
        this.URL = "jdbc:mysql://168.197.48.110:3306/c2110488_PrIspc";
        this.USER = "c2110488_PrIspc";
        this.CLAVE = "98movadoDO";
    }


//getter y setter
  
    public String getURL() {
        return URL;
    }

    public void setURL(String URL) {
        this.URL = URL;
    }

    public String getUSER() {
        return USER;
    }

    public void setUSER(String USER) {
        this.USER = USER;
    }

    public String getCLAVE() {
        return CLAVE;
    }

    public void setCLAVE(String CLAVE) {
        this.CLAVE = CLAVE;
    }

    
    //creo un objeto llamado Conection del metodo llamado conectar_db()
        public Connection conectar_db() throws SQLException{

     //nombro el objeto Conectio a conexion   
        Connection conexion = null;
        
        //intento cargar el drive
        //extructura para manejar los errores
        try {
            //donde esta el Drive dentro de nuestro proyecto java
            //con la version 5 no tiene .cj.
            Class.forName("com.mysql.cj.jdbc.Driver");
            //System.out.println("Cargado con exito");
            
        }catch (Exception ex){
            System.out.println("Error en la carga del drive");
        //handle the error
        }
        
        //Luego de cargar el drive, intento la conexion
        try{
            conexion = DriverManager.getConnection(getURL(), getUSER(), getCLAVE());
            //JOptionPane.showMessageDialog(null, "Conexion exitosa");
        } catch (Exception e){
            System.out.println("Error no se pudo establecer la conexion");
        }
        return conexion;
        
    }
//Listar
    public void listar() throws SQLException{
        
    try{
        Connection listar = conectar_db();
    //Creamos el objeto statement oara consultar
        Statement consulta=listar.createStatement();
    /*creamos un objeto result set que es como una tabla virtual en memoria
    con el resultado de la consulta*/
   System.out.println("Listado de alumnos: ");
        ResultSet resultado = consulta.executeQuery("SELECT * FROM `Alumnos`");
     while (resultado.next()){
         System.out.println(resultado.getInt("id_alumno")+ " " + resultado.getString("nombre")+ " " + resultado.getString("apellido")+ " " + resultado.getInt("DNI"));
     }
     }catch (Exception e){
            System.out.println("Error al intetntar listar db" + e.getMessage() );
       
        }
        
    }    

    
    public void insertar(){
//Por pedido de la tarea se insertara:
System.out.println("\nSe inerto Nombre: Juan, Apellido; Perez, DNI: 123");
//Insertar
      String sql = "INSERT INTO `Alumnos` (`id_alumno`, `nombre`, `apellido`, `DNI`) VALUES (NULL, 'Juan', 'Perez', '123');";
try{
Connection insertar = conectar_db();
//creamos el objeto
Statement consulta=insertar.createStatement();

consulta.executeUpdate(sql);
ResultSet resultado = consulta.executeQuery("SELECT * FROM `Alumnos`");
}catch (Exception e){
            System.out.println("Error al intetntar listar db" + e.getMessage());
       
        }
    }

    
    public void actualizar(){
        
//Consultar que usuario modificar?           
Scanner Actu =new Scanner(System.in);
System.out.println("\nQue usuario desea actualizar?");
int varActu=Actu.nextInt();

Scanner CampDni =new Scanner(System.in);
System.out.println("\nQue Numero de DNI quiere modificar");
int varDni=CampDni.nextInt();

    String sql = "UPDATE `Alumnos` SET `DNI` = "+varDni+" WHERE `Alumnos`.`id_alumno` ="+varActu; 
    
    try{
Connection actualizar = conectar_db();
//creamos el objeto
Statement consulta=actualizar.createStatement();

consulta.executeUpdate(sql);
ResultSet resultado = consulta.executeQuery("SELECT * FROM `Alumnos`");
}catch (Exception e){
            System.out.println("Error al intetntar listar db" + e.getMessage());
       
        }
    }
    
    public void borrar(){
//Consultar que usuario desea borrar?           
Scanner Borr =new Scanner(System.in);
System.out.println("\nQue usuario desea borrar?");
int varBorr=Borr.nextInt();
    String sql = "DELETE FROM `Alumnos` WHERE `Alumnos`.`id_alumno` = "+varBorr; 
    try{
Connection borrar = conectar_db();
//creamos el objeto
Statement consulta=borrar.createStatement();

consulta.executeUpdate(sql);
ResultSet resultado = consulta.executeQuery("SELECT * FROM `Alumnos`");
}catch (Exception e){
            System.out.println("Error al intetntar listar db" + e.getMessage());
       
        }   
    }
}
