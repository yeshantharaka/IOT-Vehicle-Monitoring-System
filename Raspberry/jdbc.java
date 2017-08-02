/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.swing.JOptionPane;


public class jdbc {
    
//    Set connection driver and database url
    String driver="com.mysql.jdbc.Driver";
    String url="jdbc:mysql://192.168.8.105:3306/watchdog";
 
//    Set the connection with SQL Server
    Connection getConnection() throws  Exception{
        Class.forName(driver);
        Connection con= DriverManager.getConnection(url, "root", "");
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
