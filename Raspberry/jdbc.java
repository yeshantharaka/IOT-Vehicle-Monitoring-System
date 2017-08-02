/*
 * This is the class which is used to connect to the remote database. 
 * The URL and the credentials of the SQLserver should be given.
 * 
 */

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.swing.JOptionPane;


public class jdbc {
    
//    Set connection driver and database url
    String driver="com.mysql.jdbc.Driver";
    String url="jdbc:mysql://192.168.8.105:3306/watchdog";  // URL and name of the database
 
//    Set the connection with SQL Server
    Connection getConnection() throws  Exception{
        Class.forName(driver);
        Connection con= DriverManager.getConnection(url, "root", "");   // credentials for the SQLserver
        return con;
    }
    
//    Send data to databse
    void putdata(String sql){
        try {
            Statement state=getConnection().createStatement();
            state.executeUpdate(sql);
        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, e);
        }
    }
//    Get data from database
    ResultSet getdata(String sql) throws  Exception{
        Statement state=getConnection().createStatement();
        ResultSet rset=state.executeQuery(sql);
        return rset;
    }
    
}
