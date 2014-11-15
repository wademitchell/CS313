package eightHundredAndTwo;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(name = "login", urlPatterns = {"/login"})
public class login extends HttpServlet {

	private static final long serialVersionUID = 1L;
	
	@Override
    public void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    public void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    public String getServletInfo() {
        return "";
    }

	public void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        String validUsername = "admin";
        String validPassword = "db";
        String username = request.getParameter("username");
        String password = request.getParameter("password");

        if (username != null && password != null
                && username.equals(validUsername) && password.equals(validPassword)) {

            request.getSession().setAttribute("username", username);
            
            response.sendRedirect("newScripture.html");
            
        } else {
            response.sendRedirect("invalidLogin.jsp");
        }
    }

    

}
