// for more API please visit the following link
// http://www.kaiching.org/2012/06/java-api-frame.html

import java.awt.*; // Frame, Button
import java.awt.event.*; // WindowAdapter, windowClosing(inside WindowAdapter), WindowEvent
 
public class AWTDemo {

    public static void main(String[] args) {
        Frame frame = new Frame("AWTDemo"); // build frame
        frame.addWindowListener(new AdapterDemo()); // close program by the cross button
        
        // layout type
        frame.setLayout(new GridBagLayout()); // very specific very useful
        //frame.setLayout(null);
        //frame.setLayout(new GridLayout(4, 1)); // GridLayout(int rows, int cols)
        // http://www.kaiching.org/2012/06/java-api-awt-layout.html

        frame.setSize(400, 180);




        // make labels
        Label label1;
        label1 = new Label("There is no spoon.", Label.LEFT);
        /*          3 alignments parameter
            Label.LEFT
            Label.RIGHT
            Label.CENTER
        */
        // GridBagConstraints for each component
        GridBagConstraints c1 = new GridBagConstraints();
        c1.gridx = 0;   //  from left to right
        c1.gridy = 0;   //  from top to bottom
        c1.gridwidth = 1;   //  how many grid to be filled
        c1.gridheight = 1;
        c1.fill = GridBagConstraints.BOTH;  //  how the grid is filled
        c1.anchor = GridBagConstraints.CENTER;    //  location in grid
        /*          fill attribute
                BOTH, HORIZONTAL, NONE, VERTICAL
        */
        /*          anchor attribute
            CENTER, EAST, NORTH, NORTHEAST, NORTHWEST, SOUTH, SOUTHEAST, SOUTHWEST, WEST
        */




        // make text input place
        // TextField  一行
        TextField text1 = new TextField("Please enter", 10);
        /*          4 constructor
            TextField() 
            TextField(int columns) 
            TextField(String text) 
            TextField(String text, int columns) 
        */

        // GridBagConstraints
        GridBagConstraints c2 = new GridBagConstraints();
        c2.gridx = 1;
        c2.gridy = 0;
        c2.gridwidth = 1;
        c2.gridheight = 1;
        c2.fill = GridBagConstraints.BOTH;
        c2.anchor = GridBagConstraints.CENTER;

        // TextArea  多行
        TextArea text2 = new TextArea("Please enter", 10, 10, TextArea.SCROLLBARS_BOTH);
        /*          5 constructor
            TextArea()
            TextArea(int rows, int columns)
            TextArea(String text) 
            TextArea(String text, int rows, int columns)
            TextArea(String text, int rows, int columns, int scrollbars)
        */
        /*          4 scrollbars parameters
            TextArea.SCROLLBARS_BOTH
            TextArea.SCROLLBARS_HORIZONTAL_ONLY
            TextArea.SCROLLBARS_NONE
            TextArea.SCROLLBARS_VERTICAL_ONLY
        */

        // GridBagConstraints
        GridBagConstraints c3 = new GridBagConstraints();
        c3.gridx = 0;
        c3.gridy = 1;
        c3.gridwidth = 2;
        c3.gridheight = 1;
        c3.fill = GridBagConstraints.BOTH;
        c3.anchor = GridBagConstraints.CENTER;
        


        // make buttons
        Button button1 = new Button("name display");

        // GridBagConstraints
        GridBagConstraints c4 = new GridBagConstraints();
        c4.gridx = 0;
        c4.gridy = 2;
        c4.gridwidth = 1;
        c4.gridheight = 1;
        c4.fill = GridBagConstraints.BOTH;
        c4.anchor = GridBagConstraints.CENTER;
         
        // add to the frame
        frame.add(label1, c1);
        frame.add(text1, c2);
        frame.add(text2, c3);
        frame.add(button1, c4); 
         
        frame.pack(); // make the window size to fit the preferred size
        frame.setVisible(true); // show of hide the window
    }
}
 
class AdapterDemo extends WindowAdapter { // WindowAdapter is to receive window event
    public void windowClosing(WindowEvent e) {  // close program by the cross button
        System.exit(0);
    }
}