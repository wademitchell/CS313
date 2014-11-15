package eightHundredAndTwo;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(name = "logout", urlPatterns = {"/logout"})
public class logout extends HttpServlet {

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
        
            request.getSession().removeAttribute("username");
            response.sendRedirect("index.jsp");
                
    }

}
