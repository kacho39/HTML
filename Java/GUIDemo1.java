import java.awt.*;
import javax.swing.*;
 
public class GUIDemo1 { 
	public String[] labelName = {"Input", "Output"};
	public String[] buttonName = {"New", "Clear", "Copy"};

	public void buildGUI() {
			JFrame frame = new JFrame();
        	frame.setSize(600, 160);
        	frame.setLayout(new GridBagLayout());
        	frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);	//	// close program by the cross button

        	JLabel n0 = new JLabel(labelName[0]);
        	GridBagConstraints c0 = new GridBagConstraints();
        	c0.gridx = 0;	//	from left to right
        	c0.gridy = 0;	//	from top to bottom
        	c0.gridwidth = 1;	//	how many grid to be filled
        	c0.gridheight = 1;
        	c0.weightx = 0;		//	how much does it extend, from 0 to 1
        	c0.weighty = 0;
        	c0.fill = GridBagConstraints.NONE;	//	how the grid is filled
        	c0.anchor = GridBagConstraints.WEST;	//	location in grid
        	/*          fill attribute
	            BOTH, HORIZONTAL, NONE, VERTICAL
	        */
        	/*          anchor attribute
	            CENTER, EAST, NORTH, NORTHEAST, NORTHWEST, SOUTH, SOUTHEAST, SOUTHWEST, WEST
	        */
        	frame.add(n0, c0);

        	JTextField n1 = new JTextField();
        	GridBagConstraints c1 = new GridBagConstraints();
        	c1.gridx = 1;	
        	c1.gridy = 0;
        	c1.gridwidth = 6;
        	c1.gridheight = 1;
        	c1.weightx = 0;	
        	c1.weighty = 0;
        	c1.fill = GridBagConstraints.BOTH;
        	c1.anchor = GridBagConstraints.WEST;
        	frame.add(n1, c1);

        	//	make 3 buttons
        	for (int i = 0; i < 3; i++) {
        		JButton n2 = new JButton(buttonName[i]);
        		GridBagConstraints c2 = new GridBagConstraints();
        		c1.gridx = i;	
	        	c1.gridy = 1;
	        	c1.gridwidth = 1;
	        	c1.gridheight = 1;
	        	c1.weightx = 0;	
	        	c1.weighty = 0;
	        	c1.fill = GridBagConstraints.BOTH;
	        	c1.anchor = GridBagConstraints.CENTER;
	        	frame.add(n2, c2);
        	}

        	frame.setVisible(true);
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
         
        frame.setVisible(true);
        */

        GUIDemo1 gui = new GUIDemo1();
        gui.buildGUI();

    }
}