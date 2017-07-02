// for more API please visit the following link
// http://www.kaiching.org/2012/06/java-api-frame.html

import java.awt.*; // Frame, Button
import java.awt.event.*; // WindowAdapter, windowClosing(WindowAdapter入面, WindowEvent
 
public class AWTDemo {

    public static void main(String[] args) {
        Frame frame = new Frame("AWTDemo"); // build frame
        frame.addWindowListener(new AdapterDemo()); // close program by the cross button
        
        // layout type
        frame.setLayout(new GridLayout(4, 1)); // GridLayout(int rows, int cols)

        frame.setSize(400, 180);
        
        // make labels
        Label label1;
        label1 = new Label("There is no spoon.", Label.LEFT);
        /*          3 alignments parameter
            Label.LEFT
            Label.RIGHT
            Babel.CENTER
        */

        // make text input place
        // TextArea  多行
        TextArea text1 = new TextArea("Please enter", 10, 20, TextArea.SCROLLBARS_BOTH);
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
        
        // make buttons
        Button button1 = new Button("name display");
         
        // add to the frame
        frame.add(label1);
        frame.add(label2);
        frame.add(label3);
        frame.add(text1);
        frame.add(button1); 
        frame.add(button2);
         
        frame.pack(); // make the window size to fit the preferred size
        frame.setVisible(true); // show of hide the window
    }
}
 
class AdapterDemo extends WindowAdapter { // WindowAdapter is to receive window event
    public void windowClosing(WindowEvent e) {  // close program by the cross button
        System.exit(0);
    }
}