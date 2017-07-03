import java.awt.*;
import javax.swing.*;
 
public class GUIDemo1 { 
	private JFrame frame;
	private String[] labelName = {"Input", "Output"}
	private String[] buttonName = {"New", "Clear", "Copy"}

	public void buildGUI() {
        	frame.setSize(600, 160);
        	frame.setLayout(new GridBagLayout());
        	frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        	JLabel n0 = new JLabel(labelName[0]);
        	GridBagCons
        }

    public static void main(String[] args) { 
        
        /*		default Layout (BorderLayout())
        JFrame frame = new JFrame();
        demo.setSize(500, 500);
        demo.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
         
        //			initialising components
        JCheckBox checkbox = new JCheckBox("JCheckBox");
        JRadioButton radiobutton = new JRadioButton("JRadiobutton");
        JButton button = new JButton("JButton");
        JLabel label = new JLabel("JLabel");
        JTextArea textarea = new JTextArea("JTextArea");
         
        // 			5 position
        demo.getContentPane().add(BorderLayout.EAST, checkbox);
        demo.getContentPane().add(BorderLayout.WEST, radiobutton);
        demo.getContentPane().add(BorderLayout.SOUTH, button);
        demo.getContentPane().add(BorderLayout.NORTH , label);
        demo.getContentPane().add(BorderLayout.CENTER, textarea);
         
        */



        frame.setVisible(true);
    }
}