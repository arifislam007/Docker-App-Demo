import java.io.FileWriter;
import java.io.IOException;

public class App {
    public static void main(String[] args) {
        try (FileWriter writer = new FileWriter("/data/log.txt", true)) {
            writer.write("Application started\n");
            System.out.println("Log written to /data/log.txt");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}
