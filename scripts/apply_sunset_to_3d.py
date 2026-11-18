import os

def recolor_3d_graph():
    svg_path = os.path.join(os.path.dirname(__file__), '..', 'profile-3d-contrib', 'profile-night-view.svg')
    svg_path = os.path.abspath(svg_path)
    if not os.path.exists(svg_path):
        print(f"File not found: {svg_path}")
        return

    with open(svg_path, 'r', encoding='utf-8') as f:
        content = f.read()

    color_map = {
        # Level 1 (lowest base - deep twilight dusk)
        'rgb(25, 60, 130)': 'rgb(62, 38, 52)',
        'rgb(21, 50, 109)': 'rgb(48, 28, 40)',
        'rgb(18, 42, 91)':  'rgb(31, 24, 32)',
        
        # Level 2 (low - warm terracotta / dusky rose)
        'rgb(25, 90, 210)': 'rgb(168, 76, 56)',
        'rgb(21, 75, 176)': 'rgb(138, 58, 42)',
        'rgb(18, 63, 147)': 'rgb(108, 42, 30)',
        
        # Level 3 (medium - rich sunset amber / orange)
        'rgb(25, 120, 220)': 'rgb(222, 122, 54)',
        'rgb(21, 100, 184)': 'rgb(188, 98, 40)',
        'rgb(18, 84, 154)':  'rgb(152, 76, 28)',
        
        # Level 4 (high - glowing sunset gold)
        'rgb(25, 150, 230)': 'rgb(242, 172, 82)',
        'rgb(21, 125, 192)': 'rgb(212, 145, 64)',
        'rgb(18, 105, 161)': 'rgb(178, 118, 48)',
        
        # Level 5 (peak - golden cream highlight)
        'rgb(25, 165, 240)': 'rgb(255, 225, 158)',
        'rgb(21, 138, 201)': 'rgb(235, 198, 130)',
        'rgb(18, 115, 168)': 'rgb(205, 168, 102)'
    }

    for old_c, new_c in color_map.items():
        content = content.replace(old_c, new_c)

    with open(svg_path, 'w', encoding='utf-8') as f:
        f.write(content)

    print(f"Successfully applied sunset palette to {svg_path}")

if __name__ == '__main__':
    recolor_3d_graph()
