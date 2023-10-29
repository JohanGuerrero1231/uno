/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */
package markus.b;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.sql.*;

/**
 *
 * @author johan
 */
public class App {

    public static void main(String[] args) {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");

            try (Connection conexion = DriverManager.getConnection("jdbc:mysql://localhost/prueba", "root", ""); Statement s = conexion.createStatement(); ResultSet rs = s.executeQuery("select * from persona")) {

                while (rs.next()) {
                    int id = rs.getInt(1);
                    String nombre = rs.getString(2);
                    var fechaNacimiento = rs.getDate(3);
                    System.out.println("ID: " + id + ", Nombre: " + nombre + ", Fecha de Nacimiento: " + fechaNacimiento);
                }

            }

        } catch (ClassNotFoundException | SQLException e) {
        }
    }
}
