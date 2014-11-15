package eightHundredAndTwo;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import eightHundredAndTwo.model.FileScriptureHandler;

import eightHundredAndTwo.model.Scripture;

/**
* Servlet implementation class CreateScripture
*/
@WebServlet("/CreateScripture")
public class CreateScripture extends HttpServlet {
       private static final long serialVersionUID = 1L;

     /**
     * @see HttpServlet#HttpServlet()  
     */
     public CreateScripture() {
          super();
          // TODO Auto-generated constructor stub
     }


       /**
       * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
       */
       protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
            String comment = request.getParameter("txtcomment");
            int chapter = Integer.parseInt(request.getParameter("txtChapter"));
            int verse = Integer.parseInt(request.getParameter("txtVerse"));

            Scripture newScripture = new Scripture(comment, chapter, verse);

            // TODO: Add this scripture to the list
            FileScriptureHandler handler = new FileScriptureHandler("list.txt");
            handler.addScripture(newScripture);

            response.sendRedirect("ShowList");
     }
}