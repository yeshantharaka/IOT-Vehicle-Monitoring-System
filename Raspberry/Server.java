/*
 * This is the server code that runs on the Raspberry Pi which is connected to a camera
 * This receives the message from the NodeMCU for incomming vehicle and take the picture via the camera and process it.
 * The processed data is sent to a remote database. The databse connection is in the jdbc.java file.
 */

// import jdbc;
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.ServerSocket;
import java.net.Socket;
import java.io.File;

/**
 *
 * @author WAGEESHA-PC
 */
public class Client4 {

    static ServerSocket welcomeSocket;

    public static void main(String[] args) throws Exception {
        welcomeSocket = new ServerSocket(5000);
        Socket consoc = welcomeSocket.accept();
        File file = new File("image.jpg");
        //Process p1 = Runtime.getRuntime().exec(new String[]{"source ~/.profile","workon cv"});
        while (true) {
            System.out.println(receiveData(consoc));
            if (receiveData(consoc).equals("Yes")) {
                Process p = Runtime.getRuntime().exec("./webcam.sh");
                if (p.waitFor() == 0) {
                    runFile();
                }

                while (receiveData(consoc).equals("Yes")) {
                }
            }
        }

        //System.out.println(args[0]);
    }

    //    Receive data through port 5000 when socket connected
    static String receiveData(Socket consoc) throws Exception {
        String data;
        BufferedReader inFromDevice = new BufferedReader(new InputStreamReader(consoc.getInputStream()));
        data = inFromDevice.readLine();
        return data;
    }

    static void runFile() throws Exception {
        try {
            Process p = Runtime.getRuntime().exec(
                    "python Main.py image.jpg");
            BufferedReader in = new BufferedReader(new InputStreamReader(
                    p.getInputStream()));
            String s[] = new String[10];
            int i = 0;
            while ((s[i] = in.readLine()) != null) {
                i++;
            }
            System.out.println(s[2]);
            if (Integer.parseInt(s[2].substring(0, 1))!=0) {
                sendData(s[4].substring(32));
            }
            System.out.println(s[4]);

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
    
    static void sendData(String plateNum){
        new jdbc().putdata("INSERT INTO vehicle_log (vehicle_no, arrival_date) VALUES('"+plateNum+"','2017-05-08')");
    }

}
